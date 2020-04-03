<?php

namespace App\Controller;

use App\Entity\Emprendimiento;
use App\Entity\Foto;
use App\Entity\Rubro;
use App\Entity\Sectorproductivo;
use App\Form\EmprendimientoType;
use App\Form\EmprendimientoEditType;
use App\Repository\EmprendimientoRepository;
use App\Repository\RubroRepository;
use App\Repository\SectorproductivoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
// use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
// use JMS\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Port\Csv\CsvWriter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Security;

class EmprendimientoController extends AbstractController
{
    private $serializer;

    /**
     * @Route("/", name="emprendimiento_index", methods={"GET"})
     */
    public function index(SectorproductivoRepository $sectorRepository, RubroRepository $rubroRepository, EmprendimientoRepository $emprendimientoRepository,SerializerInterface $serial,Request $request): Response
    {
        $rubros=$rubroRepository->findRubrosDistintos();
        return $this->render('emprendimiento/index.html.twig', [
            'emprendimientos' => $emprendimientoRepository->findAll(),
            'direccion'=>$request->getClientIp(),
            'rubros'=>$rubros,
            'sectores'=>$sectorRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("/emprendimiento/new", name="emprendimiento_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $emprendimiento = new Emprendimiento();
        $form = $this->createForm(EmprendimientoType::class, $emprendimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            
            //agregar la persistencia para las fotos y los contactos.
            $archivosFotos=$form->get('fotos')->getData();
            if ($archivosFotos) {

                foreach ($archivosFotos as $imagen) {
                    //el primero
                    $originalFilename = pathinfo($imagen->getClientOriginalName(), PATHINFO_FILENAME);
                    $newFilename = $originalFilename.'-'.uniqid().'.'.$imagen->guessExtension();
                    try {
                        $imagen->move(
                            $this->getParameter('carpeta_imagenes'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                        echo "fallo";
                    }
                    //crea la instancia de Foto
                    $foto = new Foto();
                    $foto->setNombreFoto($newFilename);
                    $foto->setEmprendimiento($emprendimiento);
                    //la guarda
                    $entityManager->persist($foto);
                    //$emFoto->flush();
                }
                
            }
            //control
            

            ///////////////////////////////////////////////
            $entityManager->persist($emprendimiento);
            $entityManager->flush();

            return $this->redirectToRoute('emprendimiento_index');
        }

        return $this->render('emprendimiento/new.html.twig', [
            'emprendimiento' => $emprendimiento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/emprendimiento/{id}", name="emprendimiento_show", methods={"GET"})
     */
    public function show(Emprendimiento $emprendimiento): Response
    {
        return $this->render('emprendimiento/show.html.twig', [
            'carpeta_imagenes'=>$this->getParameter('carpeta_imagenes'),
            'emprendimiento' => $emprendimiento,
        ]);
    }

    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("/emprendimiento/{id}/edit", name="emprendimiento_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Emprendimiento $emprendimiento): Response
    {
        $form = $this->createForm(EmprendimientoType::class, $emprendimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$this->getDoctrine()->getManager()->flush();
            $entityManager=$this->getDoctrine()->getManager();
            /**
             * 
             */
            $archivosFotos=$form->get('fotos')->getData();
            if ($archivosFotos) {

                foreach ($archivosFotos as $imagen) {
                    //el primero
                    $originalFilename = pathinfo($imagen->getClientOriginalName(), PATHINFO_FILENAME);
                    $newFilename = $originalFilename.'-'.uniqid().'.'.$imagen->guessExtension();
                    try {
                        $imagen->move(
                            $this->getParameter('carpeta_imagenes'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                        echo "fallo";
                    }
                    //crea la instancia de Foto
                    $foto = new Foto();
                    $foto->setNombreFoto($newFilename);
                    $foto->setEmprendimiento($emprendimiento);
                    //la guarda
                    $entityManager->persist($foto);
                    //$emFoto->flush();
                }
                
                /**
                 * 
                 */
                return $this->redirectToRoute('emprendimiento_index');
            }
            $entityManager->persist($emprendimiento);
            $entityManager->flush();

        }
            return $this->render('emprendimiento/edit.html.twig', [
                'emprendimiento' => $emprendimiento,
                'form' => $form->createView(),
            ]);
    }

    /**
     * @IsGranted("ROLE_MUNICIPIO")
     * @Route("/emprendimiento/{id}", name="emprendimiento_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Emprendimiento $emprendimiento): Response
    {
        if ($this->isCsrfTokenValid('delete'.$emprendimiento->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($emprendimiento);
            $entityManager->flush();
        }

        return $this->redirectToRoute('emprendimiento_index');
    }

    /**
     * @Route("/api/emprendimientos",name="api_emprendimiento",methods={"GET"})
     */
    public function api_emprendimientos(EmprendimientoRepository $emprendimientoRepository):Response
    {
        $emprendimientos=$emprendimientoRepository->findAll();
        $arrayEmprendimientos = array();
        foreach ($emprendimientos as $emprendimiento) {
            $fotos = $emprendimiento->getFotos();
            $arrayFotos=[];
            foreach ($fotos as $foto) {
                $arrayFotos[]=[
                    'nombre_foto'=>$foto->getNombreFoto(),
                ];
            }
            $arrayEmprendimientos[] = [
                'id'=>$emprendimiento->getId(),
                'descripcion'=>$emprendimiento->getDescripcion(),
                'razon_social'=>$emprendimiento->getRazonsocial(),
                'direccion'=>$emprendimiento->getDireccion(),
                'cuit'=>$emprendimiento->getCuit(),
                'descripcion'=>$emprendimiento->getDescripcion(),
                'latitud'=>$emprendimiento->getLatitud(),
                'longitud'=>$emprendimiento->getLongitud(),
                'ambito'=>$emprendimiento->getAmbito()->getTipoambito(),
                'rubro'=>$emprendimiento->getRubro()->getTipo(),
                'sector'=>$emprendimiento->getRubro()->getSector()->getNombre(),
                'fotos'=>$arrayFotos,
            ];
        }
        return new JsonResponse($arrayEmprendimientos);
    }

    /*public function descargar(Request $request, Emprendimiento $emprendimiento): Response
    {
        if ($this->isCsrfTokenValid('descarga'.$emprendimiento->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            
            // $entityManager->remove($emprendimiento);
            // $entityManager->flush();
        }
        
        return $this->redirectToRoute('emprendimiento_index');
    }*/
    
    /**
     * @Route("/emprendimiento/descarga/{id}", name="emprendimiento_ficha_descarga", methods={"GET"})
     */
    public function archivopdf(Request $request, Emprendimiento $emprendimiento): Response
    {
        // if ($this->isCsrfTokenValid('descarga'.$emprendimiento->getId(), $request->request->get('_token'))) {
            $pdfOptions=new Options();
            $pdfOptions->set('defaultFont','Arial');

            $dompdf=new Dompdf($pdfOptions);

            $html = $this->renderView('emprendimiento-ficha.html.twig',[
                'emprendimiento'=>$emprendimiento,
            ]);

            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4','portrait');
            $dompdf->render();

            $dompdf->stream("ficha-".$emprendimiento->getRazonsocial().".pdf",[
                "Attachment"=>false
            ]);
        // }
    }

    /**
     * @Route("/emprendimientos/descargar?formato={formato}&rubro={rubro}&sector={sector}", name="emprendimientos_descargar", methods={"GET"})
     */
    public function emprendimientos_descarga(String $formato,String $rubro,String $sector): Response
    {
        switch ($formato) {
            case 'pdf':
                $this->emprendimientos_pdf($rubro);
                break;
            case 'xlsx':
                return $this->emprendimientos_xls($rubro);
                break;
            case 'csv':
                return $this->emprendimientos_csv($rubro);
                break;
            default:
                echo 'no disponible';
                break;
        }
    }

    /**
     * @Route("/emprendimientos/descarga/pdf/{rubro}", name="emprendimientos_pdf_descarga", methods={"GET"})
     */
    public function emprendimientos_pdf($rubro): Response
    {
        // if ($this->isCsrfTokenValid('descarga'.$emprendimiento->getId(), $request->request->get('_token'))) {
            $rubroRepository = $this->getDoctrine()->getRepository(Rubro::class);
            $emprendimientoRepository = $this->getDoctrine()->getRepository(Emprendimiento::class);
            $sectorproductivoRepository = $this->getDoctrine()->getRepository(Sectorproductivo::class);
            $pdfOptions=new Options();
            $pdfOptions->set('defaultFont','Arial');

            $dompdf=new Dompdf($pdfOptions);
            
            $unRubro=$rubroRepository->findOneBy([
                'tipo'=>$rubro]);
            // $unSector=$sectorRepository->findOneBy([
            //     'nombre'=>$sector,
            // ]);
            
            if (is_null($unRubro)){
                $emprendimientos=$emprendimientoRepository->findAll();
            }else{
                $rubro_id=$unRubro->getId();
                // $sector_id=$unSector->getId();
                $emprendimientos=$emprendimientoRepository->findBy([
                    'rubro'=>$rubro_id,
                    // 'rubro.sectorproductivo'=>$sector_id,
                ]);
            }
            $html = $this->renderView('emprendimientos_pdf.html.twig',[
                'emprendimientos'=>$emprendimientos,
            ]);

            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4','portrait');
            $dompdf->render();

            $dompdf->stream("emprendimientos.pdf",[
                "Attachment"=>false
            ]);
        // }
    }

    /**
     * @Route("/emprendimientos/descarga/xls/{rubro}",name="emprendimientos_xls_descarga",methods={"GET"})
     */
    public function emprendimientos_xls($rubro): Response
    {
        $rubroRepository = $this->getDoctrine()->getRepository(Rubro::class);
        $emprendimientoRepository = $this->getDoctrine()->getRepository(Emprendimiento::class);
        $sectorproductivoRepository = $this->getDoctrine()->getRepository(Sectorproductivo::class);
        
        $spreadsheet=new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle("Emprendimientos");
        $encabezados=['Razon Social','CUIT','Dirección','Descripción','Rubro','Sector Productivo','Ámbito','Latitud','Longitud'];

        $datos=[];

        
        $unRubro=$rubroRepository->findOneBy([
            'tipo'=>$rubro]);
        
        if (is_null($unRubro)){
            $emprendimientos=$emprendimientoRepository->findAll();
        }else{
            $rubro_id=$unRubro->getId();
            $emprendimientos=$emprendimientoRepository->findBy([
                'rubro'=>$rubro_id
            ]);
        }
        // $emprendimientos=$emprendimientoRepository->findAll();

        foreach ($emprendimientos as $emprendimiento) {
            $datos[]=[
                $emprendimiento->getRazonsocial(),
                $emprendimiento->getCuit(),
                $emprendimiento->getDireccion(),
                $emprendimiento->getDescripcion(),
                $emprendimiento->getRubro()->getTipo(),
                $emprendimiento->getRubro()->getSector()->getNombre(),
                $emprendimiento->getAmbito()->getTipoambito(),
                $emprendimiento->getLatitud(),
                $emprendimiento->getLongitud(),
            ];
        }

        $sheet->fromArray(
                $encabezados
            );
        $sheet->getStyle('A1:I1')->getFont()->setBold(true);
        $sheet->fromArray(
            $datos,
            NULL,
            'A2'
        );

        $writer=new Xlsx($spreadsheet);

        $fileName = 'emprendimientos-'.$rubro.'.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        $writer->save($temp_file);
        
        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    /**
     * @Route("/emprendimientos/descarga/csv/{rubro}",name="emprendimientos_csv_descarga",methods={"GET"})
     */
    public function emprendimientos_csv($rubro): Response
    {
        $rubroRepository = $this->getDoctrine()->getRepository(Rubro::class);
        $emprendimientoRepository = $this->getDoctrine()->getRepository(Emprendimiento::class);
        $sectorproductivoRepository = $this->getDoctrine()->getRepository(Sectorproductivo::class);

        $unRubro=$rubroRepository->findOneBy([
            'tipo'=>$rubro]);
        
        if (is_null($unRubro)){
            $emprendimientos=$emprendimientoRepository->findAll();
        }else{
            $rubro_id=$unRubro->getId();
            $emprendimientos=$emprendimientoRepository->findBy([
                'rubro'=>$rubro_id
            ]);
        }
        $encabezados=['Razon_Social','Direccion','Rubro','Ambito','Latitud','Longitud'];
        $response = $this->render('emprendimientos_csv.html.twig', array(
            'emprendimientos' => $emprendimientos,
            'headers'=>$encabezados,
            ));

        $filename = "emprendimientos-".$rubro.".csv";
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename='.$filename);

        return $response;
    }

    /**
     * @IsGranted("ROLE_EMPRENDEDOR")
     * @Route("/emprendimientos",name="mis_emprendimientos", methods={"GET"})
     */
    public function mis_emprendimientos(EmprendimientoRepository $emprendimientoRepository,Security $security)
    {
        $user =$security->getUser();

        if ($this->isGranted('ROLE_INVESTIGADOR')) {
            return $this->render('user/mis-emprendimientos.html.twig', [
                'title'=>'Emprendimientos',
                'usuario' => $user,
                'emprendimientos'=>$emprendimientoRepository->findAll(),
            ]);
        }else{
            return $this->render('user/mis-emprendimientos.html.twig', [
                'title'=>'Mis Emprendimientos',
                'usuario' => $user,
                'emprendimientos'=>$user->getEmprendimientos(),
            ]);
        }
    }

    /**
     * @IsGranted("ROLE_EMPRENDEDOR")
     * @Route("/mi-emprendimiento/editar/{id}",name="mi_emprendimiento_editar",methods={"GET","POST"})
     */
    public function mi_emprendimiento_editar(Request $request, Security $security,int $id): Response
    {
        $user=$security->getUser();
        $arrayEmprendimientos=$user->getEmprendimientos();
        //buscar en arrayemprendimientos la id
        $emprendimiento=null;
        foreach ($arrayEmprendimientos as $unEmprendimiento) {
            if ($id==$unEmprendimiento->getId()) {
                $emprendimiento=$unEmprendimiento;
            }
        }
        $form = $this->createForm(EmprendimientoType::class, $emprendimiento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $this->getDoctrine()->getManager()->flush();
            $entityManager=$this->getDoctrine()->getManager();
            /**
             * -----------------------------------------
             */
            $archivosFotos=$form->get('fotos')->getData();
            if ($archivosFotos) {

                foreach ($archivosFotos as $imagen) {
                    //el primero
                    $originalFilename = pathinfo($imagen->getClientOriginalName(), PATHINFO_FILENAME);
                    $newFilename = $originalFilename.'-'.uniqid().'.'.$imagen->guessExtension();
                    try {
                        $imagen->move(
                            $this->getParameter('carpeta_imagenes'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                        echo "fallo";
                    }
                    //crea la instancia de Foto
                    $foto = new Foto();
                    $foto->setNombreFoto($newFilename);
                    $foto->setEmprendimiento($emprendimiento);
                    //la guarda
                    $entityManager->persist($foto);
                    //$emFoto->flush();
                }
            /**
             * --------------------------------------------
            */
            }
            $entityManager->persist($emprendimiento);
            $entityManager->flush();
            return $this->redirectToRoute('mis_emprendimientos');
        }

        return $this->render('emprendimiento/edit.html.twig', [
            'emprendimiento' => $emprendimiento,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/estadisticas",name="estadisticas", methods={"GET"})
     */
    public function estadisticas(SectorproductivoRepository $sectorRepository, RubroRepository $rubroRepository, EmprendimientoRepository $emprendimientoRepository,SerializerInterface $serial,Request $request): Response
    {
        return $this->render('emprendimiento/estadisticas.html.twig', [
            'emprendimientos' => $emprendimientoRepository->findAll(),
            'rubros'=>$rubroRepository->findAll(),
            'sectores'=>$sectorRepository->findAll(),
        ]);
    }

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer=$serializer;
    }
    
}

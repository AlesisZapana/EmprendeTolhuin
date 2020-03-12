<?php

namespace App\Controller;

use App\Form\LoteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Security;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Entity\Emprendimiento;
use App\Entity\Rubro;
use App\Entity\Sectorproductivo;
use App\Entity\Ambito;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\ErrorHandler\ErrorHandler;

class LoteController extends AbstractController
{

    /**
     * @IsGranted("ROLE_INVESTIGADOR")
     * @Route("/carga-lotes",name="carga_lotes",methods={"GET","POST"})
     */    
    public function carga_lotes(Request $request): Response
    {
        ErrorHandler::register();
        $form = $this->createForm(LoteType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $archivo_datos=$form->get('lotenombre')->getData();
            $encabezados=$form->get('headers')->getData();

            if ($encabezados) {
                $inicio=1;
            }else {
                $inicio=0;
            }
            //
            $formato=pathinfo($archivo_datos->getClientOriginalName(),PATHINFO_EXTENSION);
            if ($formato=='xlsx') {
                $reader=new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }else if ($formato=='ods'){
                $reader=new \PhpOffice\PhpSpreadsheet\Reader\Ods();
            }
            $reader->setReadDataOnly(true);
            $spreadsheet=$reader->load($archivo_datos);
            $worksheet=$spreadsheet->getActiveSheet();
            $filas=$worksheet->toArray();
            $headers=['Razon_Social','CUIT','Direccion','Descripcion','Rubro','Sector','Ambito','Latitud','Longitud'];
            $emprendimientos=[];
            $rubroRepository = $this->getDoctrine()->getRepository(Rubro::class);
            $emprendimientoRepository = $this->getDoctrine()->getRepository(Emprendimiento::class);
            $sectorproductivoRepository = $this->getDoctrine()->getRepository(Sectorproductivo::class);
            $ambitoRepository=$this->getDoctrine()->getRepository(Ambito::class);
            $almacena=true;
            foreach (array_slice($filas,$inicio) as $fila) {
                $emprendimiento = new Emprendimiento();
                /**si se reciben datos nulos */
                if (is_null($fila[0]) || is_null($fila[1]) || is_null($fila[2]) || is_null($fila[4]) || is_null($fila[5]) || is_null($fila[6]) || is_null($fila[7]) || is_null($fila[8])) {
                    $this->addFlash('danger','Existen celdas con datos nulos, operación cancelada');
                    $almacena=false;
                }else {
                    $busquedaEmprendimiento=$emprendimientoRepository->findByRazonsocial($fila[0]);
                    $almacena=$almacena&&!$busquedaEmprendimiento;
                    
                    /**si es que ya existe ese emprendimiento */
                    if ($busquedaEmprendimiento) {
                        $this->addFlash('danger','El emprendimiento: '.$fila[0].' ya se encuentra registrado en la base de datos');
                    }else{
                        $emprendimiento->setRazonsocial($fila[0]);
                        if (is_int($fila[1])) {
                            $emprendimiento->setCuit($fila[1]);
                        }else {
                            $this->addFlash('danger','El CUIT tiene que ser un número');
                            $almacena=false;
                        }

                        $emprendimiento->setDireccion($fila[2]);
                        $emprendimiento->setDescripcion($fila[3]);
                        /** comprobar disponibilidad del rubro y sector*/
                        $sector=$sectorproductivoRepository->findOneByNombre($fila[5]);
                        if ($sector) {
                            $busquedaRubro=$rubroRepository->findOneBy([
                                'tipo'=>$fila[4],
                                'sector'=>$sector->getId(),
                                ]);                            
                        }else {
                            $busquedaRubro=false;
                        }
                        $busquedaAmbito=$ambitoRepository->findOneByTipoambito($fila[6]);
                        /**determina si se deben almacenar los emprendimientos */
                        $almacena=$almacena&&$busquedaRubro&&$busquedaAmbito;
                        if ($busquedaRubro && $busquedaAmbito) {
                            $emprendimiento->setRubro($busquedaRubro);
                            $emprendimiento->setAmbito($busquedaAmbito);
                            if (is_float($fila[7])&&is_float($fila[8])) {
                                $emprendimiento->setLatitud($fila[7]);
                                $emprendimiento->setLongitud($fila[8]);
                                $emprendimientos[]=$emprendimiento;
                            }else {
                                $this->addFlash('danger','La latitud y la longitud deben ser números');
                                $almacena=false;
                            }
                        }else{
                            if (!$busquedaRubro) {
                                $this->addFlash('danger','El rubro: '.$fila[4].' no se encuentra registrado en la base de datos');
                            }
                            if (!$busquedaAmbito) {
                                $this->addFlash('danger','El ámbito: '.$fila[6].' no se encuentra registrado en la base de datos');
                            }
                        }
                    }
                }
        
            }
            /**determinar si se deben almacenar los emprendimientos. */
            if ($almacena) {
                $entityManager = $this->getDoctrine()->getManager();
                foreach ($emprendimientos as $emprendimiento) {
                    $entityManager->persist($emprendimiento);
                    $entityManager->flush();
                }
                $this->addFlash('success','Los emprendimientos se han almacenado con éxito!');
            }else{
                $this->addFlash('warning','Los emprendimientos no han podido almacenarse');
            }
        }

        return $this->render('emprendimiento/carga-lotes.html.twig', [
            'controller_name' => 'LoteController',
            'form'=>$form->createView(),
        ]);
    }
}

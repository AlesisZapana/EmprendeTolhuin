<?php

namespace App\DataFixtures;

use App\Entity\Rubro;
use App\Entity\Ambito;
use App\Entity\Sectorproductivo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RubroFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /**Sectores Productivos */
            $sector1=new Sectorproductivo();
            $sector1->setNombre('Primario');
            $manager->persist($sector1);

            $sector2=new Sectorproductivo();
            $sector2->setNombre('Secundario');
            $manager->persist($sector2);

            $sector3=new Sectorproductivo();
            $sector3->setNombre('Terciario');
            $manager->persist($sector3);

            $sector4=new Sectorproductivo();
            $sector4->setNombre('Cuaternario');
            $manager->persist($sector4);

            $sector5=new Sectorproductivo();
            $sector5->setNombre('Quinario');
            $manager->persist($sector5);

        /**Ambitos */
            $ambito1=new Ambito();
            $ambito1->setTipoambito('Publico');
            $manager->persist($ambito1);

            $ambito2=new Ambito();
            $ambito2->setTipoambito('Privado');
            $manager->persist($ambito2);

            $ambito3=new Ambito();
            $ambito3->setTipoambito('ONG');
            $manager->persist($ambito3);

        /**Rubros */
            $rubro1=new Rubro();
            $rubro1->setTipo('Acopiadora');
            $rubro1->setSector($sector3);
            $manager->persist($rubro1);

            $rubro2=new Rubro();
            $rubro2->setTipo('Agencia de Viajes');
            $rubro2->setSector($sector3);
            $manager->persist($rubro2);

            $rubro3=new Rubro();
            $rubro3->setTipo('Agrimensura');
            $rubro3->setSector($sector3);
            $manager->persist($rubro3);
            
            $rubro4=new Rubro();
            $rubro4->setTipo('Alojamiento');
            $rubro4->setSector($sector3);
            $manager->persist($rubro4);

            $rubro5=new Rubro();
            $rubro5->setTipo('Alquiler de autos');
            $rubro5->setSector($sector3);
            $manager->persist($rubro5);

            $rubro6=new Rubro();
            $rubro6->setTipo('Artesanías');
            $rubro6->setSector($sector3);
            $manager->persist($rubro6);

            $rubro7=new Rubro();
            $rubro7->setTipo('Aseguradora');
            $rubro7->setSector($sector3);
            $manager->persist($rubro7);

            $rubro8=new Rubro();
            $rubro8->setTipo('Avícola');
            $rubro8->setSector($sector1);
            $manager->persist($rubro8);

            $rubro9=new Rubro();
            $rubro9->setTipo('Bar');
            $rubro9->setSector($sector3);
            $manager->persist($rubro9);

            $rubro10=new Rubro();
            $rubro10->setTipo('Carpintería');
            $rubro10->setSector($sector2);
            $manager->persist($rubro10);

            $rubro11=new Rubro();
            $rubro11->setTipo('Carpintería');
            $rubro11->setSector($sector3);
            $manager->persist($rubro11);

            $rubro12=new Rubro();
            $rubro12->setTipo('Cerrajería');
            $rubro12->setSector($sector3);
            $manager->persist($rubro12);

            $rubro13=new Rubro();
            $rubro13->setTipo('Comercio');
            $rubro13->setSector($sector3);
            $manager->persist($rubro13);

            $rubro14=new Rubro();
            $rubro14->setTipo('Constructora');
            $rubro14->setSector($sector3);
            $manager->persist($rubro14);

            $rubro15=new Rubro();
            $rubro15->setTipo('Consultora Ambiental');
            $rubro15->setSector($sector3);
            $manager->persist($rubro15);

            $rubro16=new Rubro();
            $rubro16->setTipo('Consultorio');
            $rubro16->setSector($sector3);
            $manager->persist($rubro16);

            $rubro17=new Rubro();
            $rubro17->setTipo('Distribuidora');
            $rubro17->setSector($sector3);
            $manager->persist($rubro17);

            $rubro18=new Rubro();
            $rubro18->setTipo('Educación');
            $rubro18->setSector($sector4);
            $manager->persist($rubro18);

            $rubro19=new Rubro();
            $rubro19->setTipo('Embotelladora');
            $rubro19->setSector($sector3);
            $manager->persist($rubro19);

            $rubro20=new Rubro();
            $rubro20->setTipo('Estudio Jurídico');
            $rubro20->setSector($sector3);
            $manager->persist($rubro20);

            $rubro21=new Rubro();
            $rubro21->setTipo('Farmacia');
            $rubro21->setSector($sector3);
            $manager->persist($rubro21);

            $rubro22=new Rubro();
            $rubro22->setTipo('Ferretería');
            $rubro22->setSector($sector3);
            $manager->persist($rubro22);

            $rubro23=new Rubro();
            $rubro23->setTipo('Forestal');
            $rubro23->setSector($sector1);
            $manager->persist($rubro23);

            $rubro24=new Rubro();
            $rubro24->setTipo('Forestal');
            $rubro24->setSector($sector2);
            $manager->persist($rubro24);

            $rubro25=new Rubro();
            $rubro25->setTipo('Ganadería');
            $rubro25->setSector($sector1);
            $manager->persist($rubro25);

            $rubro26=new Rubro();
            $rubro26->setTipo('Gastronomía');
            $rubro26->setSector($sector3);
            $manager->persist($rubro26);

            $rubro27=new Rubro();
            $rubro27->setTipo('Gimnasio');
            $rubro27->setSector($sector3);
            $manager->persist($rubro27);

            $rubro28=new Rubro();
            $rubro28->setTipo('Gomería');
            $rubro28->setSector($sector3);
            $manager->persist($rubro28);

            $rubro29=new Rubro();
            $rubro29->setTipo('Herrería');
            $rubro29->setSector($sector2);
            $manager->persist($rubro29);

            $rubro30=new Rubro();
            $rubro30->setTipo('Hortícola');
            $rubro30->setSector($sector1);
            $manager->persist($rubro30);

            $rubro31=new Rubro();
            $rubro31->setTipo('Informática');
            $rubro31->setSector($sector3);
            $manager->persist($rubro31);

            $rubro32=new Rubro();
            $rubro32->setTipo('Inmobiliaria');
            $rubro32->setSector($sector3);
            $manager->persist($rubro32);

            $rubro33=new Rubro();
            $rubro33->setTipo('Kinesiología');
            $rubro33->setSector($sector3);
            $manager->persist($rubro33);
            
            $rubro34=new Rubro();
            $rubro34->setTipo('Lavadero');
            $rubro34->setSector($sector3);
            $manager->persist($rubro34);

            $rubro35=new Rubro();
            $rubro35->setTipo('Librería');
            $rubro35->setSector($sector3);
            $manager->persist($rubro35);

            $rubro36=new Rubro();
            $rubro36->setTipo('Locutorio');
            $rubro36->setSector($sector3);
            $manager->persist($rubro36);

            $rubro37=new Rubro();
            $rubro37->setTipo('Lubricentro');
            $rubro37->setSector($sector3);
            $manager->persist($rubro37);

            $rubro38=new Rubro();
            $rubro38->setTipo('Mercado');
            $rubro38->setSector($sector3);
            $manager->persist($rubro38);

            $rubro39=new Rubro();
            $rubro39->setTipo('Movimiento de suelo');
            $rubro39->setSector($sector3);
            $manager->persist($rubro39);

            $rubro40=new Rubro();
            $rubro40->setTipo('Mueblería');
            $rubro40->setSector($sector2);
            $manager->persist($rubro40);

            $rubro41=new Rubro();
            $rubro41->setTipo('Mueblería');
            $rubro41->setSector($sector3);
            $manager->persist($rubro41);

            $rubro42=new Rubro();
            $rubro42->setTipo('Oficina Pública');
            $rubro42->setSector($sector3);
            $manager->persist($rubro42);

            $rubro43=new Rubro();
            $rubro43->setTipo('Óptica');
            $rubro43->setSector($sector3);
            $manager->persist($rubro43);

            $rubro44=new Rubro();
            $rubro44->setTipo('Panadería');
            $rubro44->setSector($sector3);
            $manager->persist($rubro44);

            $rubro45=new Rubro();
            $rubro45->setTipo('Peluquería');
            $rubro45->setSector($sector3);
            $manager->persist($rubro45);

            $rubro46=new Rubro();
            $rubro46->setTipo('Polirrubro');
            $rubro46->setSector($sector3);
            $manager->persist($rubro46);

            $rubro47=new Rubro();
            $rubro47->setTipo('Radio');
            $rubro47->setSector($sector3);
            $manager->persist($rubro47);

            $rubro48=new Rubro();
            $rubro48->setTipo('Reciclaje');
            $rubro48->setSector($sector3);
            $manager->persist($rubro48);

            $rubro49=new Rubro();
            $rubro49->setTipo('Repuestos para autos');
            $rubro49->setSector($sector3);
            $manager->persist($rubro49);

            $rubro50=new Rubro();
            $rubro50->setTipo('Salón');
            $rubro50->setSector($sector3);
            $manager->persist($rubro50);

            $rubro51=new Rubro();
            $rubro51->setTipo('Servicios turísticos');
            $rubro51->setSector($sector3);
            $manager->persist($rubro51);

            $rubro52=new Rubro();
            $rubro52->setTipo('Taller mecánico');
            $rubro52->setSector($sector3);
            $manager->persist($rubro52);

            $rubro53=new Rubro();
            $rubro53->setTipo('Telefonía');
            $rubro53->setSector($sector3);
            $manager->persist($rubro53);

            $rubro54=new Rubro();
            $rubro54->setTipo('Transporte');
            $rubro54->setSector($sector3);
            $manager->persist($rubro54);

            $rubro55=new Rubro();
            $rubro55->setTipo('Transporte de carga');
            $rubro55->setSector($sector3);
            $manager->persist($rubro55);

            $rubro56=new Rubro();
            $rubro56->setTipo('Turbera');
            $rubro56->setSector($sector1);
            $manager->persist($rubro56);

            $rubro57=new Rubro();
            $rubro57->setTipo('Veterinaria');
            $rubro57->setSector($sector3);
            $manager->persist($rubro57);

            $rubro58=new Rubro();
            $rubro58->setTipo('Vidriería');
            $rubro58->setSector($sector3);
            $manager->persist($rubro58);

            $rubro59=new Rubro();
            $rubro59->setTipo('Vivero');
            $rubro59->setSector($sector2);
            $manager->persist($rubro59);

        /**AGREGAR REFERENCIAS */
            $this->addReference("AMBITO_PUBLICO",$ambito1);
            $this->addReference("AMBITO_PRIVADO",$ambito2);
            $this->addReference("AMBITO_ONG",$ambito3);

            $this->addReference("RUBRO_ACOPIADORA",$rubro1);
            $this->addReference("RUBRO_AGENCIA",$rubro2);
            $this->addReference("RUBRO_AGRIMENSURA",$rubro3);
            $this->addReference("RUBRO_ALOJAMIENTO",$rubro4);
            $this->addReference("RUBRO_ALQUILER_AUTOS",$rubro5);
            $this->addReference("RUBRO_ARTESANIAS",$rubro6);
            $this->addReference("RUBRO_ASEGURADORA",$rubro7);
            $this->addReference("RUBRO_AVICOLA",$rubro8);
            $this->addReference("RUBRO_BAR",$rubro9);
            $this->addReference("RUBRO_CARPINTERIA_2",$rubro10);
            $this->addReference("RUBRO_CARPINTERIA_3",$rubro11);
            $this->addReference("RUBRO_CERRAJERIA",$rubro12);
            $this->addReference("RUBRO_COMERCIO",$rubro13);
            $this->addReference("RUBRO_CONSTRUCTORA",$rubro14);
            $this->addReference("RUBRO_CONSULTORA",$rubro15);
            $this->addReference("RUBRO_CONSULTORIO",$rubro16);
            $this->addReference("RUBRO_DISTRIBUIDORA",$rubro17);
            $this->addReference("RUBRO_EDUCACION",$rubro18);
            $this->addReference("RUBRO_EMBOTELLADORA",$rubro19);
            $this->addReference("RUBRO_ESTUDIO",$rubro20);
            $this->addReference("RUBRO_FARMACIA",$rubro21);
            $this->addReference("RUBRO_FERRETERIA",$rubro22);
            $this->addReference("RUBRO_FORESTAL_1",$rubro23);
            $this->addReference("RUBRO_FORESTAL_2",$rubro24);
            $this->addReference("RUBRO_GANADERIA",$rubro25);
            $this->addReference("RUBRO_GASTRONOMIA",$rubro26);
            $this->addReference("RUBRO_GIMNASIO",$rubro27);
            $this->addReference("RUBRO_GOMERIA",$rubro28);
            $this->addReference("RUBRO_HERRERIA",$rubro29);
            $this->addReference("RUBRO_HORTICOLA",$rubro30);
            $this->addReference("RUBRO_INFORMATICA",$rubro31);
            $this->addReference("RUBRO_INMOBILIARIA",$rubro32);
            $this->addReference("RUBRO_KINESIOLOGIA",$rubro33);
            $this->addReference("RUBRO_LAVADERO",$rubro34);
            $this->addReference("RUBRO_LIBRERIA",$rubro35);
            $this->addReference("RUBRO_LOCUTORIO",$rubro36);
            $this->addReference("RUBRO_LUBRICENTRO",$rubro37);
            $this->addReference("RUBRO_MERCADO",$rubro38);
            $this->addReference("RUBRO_MOVIMIENTO_SUELO",$rubro39);
            $this->addReference("RUBRO_MUEBLERIA_2",$rubro40);
            $this->addReference("RUBRO_MUEBLERIA_3",$rubro41);
            $this->addReference("RUBRO_OFICINA_PUBLICA",$rubro42);
            $this->addReference("RUBRO_OPTICA",$rubro43);
            $this->addReference("RUBRO_PANADERIA",$rubro44);
            $this->addReference("RUBRO_PELUQUERIA",$rubro45);
            $this->addReference("RUBRO_POLIRRUBRO",$rubro46);
            $this->addReference("RUBRO_RADIO",$rubro47);
            $this->addReference("RUBRO_RECICLAJE",$rubro48);
            $this->addReference("RUBRO_REPUESTOS_AUTOS",$rubro49);
            $this->addReference("RUBRO_SALON",$rubro50);
            $this->addReference("RUBRO_SERVICIOS_TURISTICOS",$rubro51);
            $this->addReference("RUBRO_TALLER_MECANICO",$rubro52);
            $this->addReference("RUBRO_TELEFONIA",$rubro53);
            $this->addReference("RUBRO_TRANSPORTE",$rubro54);
            $this->addReference("RUBRO_TRANSPORTE_CARGA",$rubro55);
            $this->addReference("RUBRO_TURBERA",$rubro56);
            $this->addReference("RUBRO_VETERINARIA",$rubro57);
            $this->addReference("RUBRO_VIDRIERIA",$rubro58);
            $this->addReference("RUBRO_VIVERO",$rubro59);

        $manager->flush();
    }
}

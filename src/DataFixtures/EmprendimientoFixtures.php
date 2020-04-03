<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Emprendimiento;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class EmprendimientoFixtures extends Fixture implements DependentFixtureInterface
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        $passwordEncoder = $this->encoder;
        /**USUARIOS */
            $admin=new User();
            $admin->setUsername('admin');
            $admin->setRoles(["ROLE_ADMIN"]);
            $admin->setPassword($passwordEncoder->encodePassword(
                $admin,
                '123456'
            ));
            $manager->persist($admin);

            $municipio=new User();
            $municipio->setUsername('municipio');
            $municipio->setRoles(["ROLE_MUNICIPIO"]);
            $municipio->setPassword($passwordEncoder->encodePassword(
                $municipio,
                'municipio'
            ));
            $manager->persist($municipio);

            $investigador=new User();
            $investigador->setUsername('investigador');
            $investigador->setRoles(["ROLE_INVESTIGADOR"]);
            $investigador->setPassword($passwordEncoder->encodePassword(
                $investigador,
                'investigador'
            ));
            $manager->persist($investigador);

            $user1=new User();
            $user1->setUsername('d.espinosa');
            $user1->setRoles(["ROLE_EMPRENDEDOR"]);
            $user1->setPassword($passwordEncoder->encodePassword(
                $user1,
                $user1->getUsername()
                )
            );
            $manager->persist($user1);

            $user2=new User();
            $user2->setUsername('a.rocha');
            $user2->setRoles(["ROLE_EMPRENDEDOR"]);
            $user2->setPassword($passwordEncoder->encodePassword(
                $user2,
                $user2->getUsername()
                )
            );
            $manager->persist($user2);

            
            $user3=new User();
            $user3->setUsername('m.lopez');
            $user3->setRoles(["ROLE_EMPRENDEDOR"]);
            $user3->setPassword($passwordEncoder->encodePassword(
                $user3,
                $user3->getUsername()
                )
            );
            $manager->persist($user3);

            
            $user4=new User();
            $user4->setUsername('c.lopez');
            $user4->setRoles(["ROLE_EMPRENDEDOR"]);
            $user4->setPassword($passwordEncoder->encodePassword(
                $user4,
                $user4->getUsername()
                )
            );
            $manager->persist($user4);

            
            $user5=new User();
            $user5->setUsername('c.tordolla');
            $user5->setRoles(["ROLE_EMPRENDEDOR"]);
            $user5->setPassword($passwordEncoder->encodePassword(
                $user5,
                $user5->getUsername()
                )
            );
            $manager->persist($user5);

            
            $user6=new User();
            $user6->setUsername('a.perez');
            $user6->setRoles(["ROLE_EMPRENDEDOR"]);
            $user6->setPassword($passwordEncoder->encodePassword(
                $user6,
                $user6->getUsername()
                )
            );
            $manager->persist($user6);

            
            $user7=new User();
            $user7->setUsername('m.carvajal');
            $user7->setRoles(["ROLE_EMPRENDEDOR"]);
            $user7->setPassword($passwordEncoder->encodePassword(
                $user7,
                $user7->getUsername()
                )
            );
            $manager->persist($user7);

            
            $user8=new User();
            $user8->setUsername('d.fuego');
            $user8->setRoles(["ROLE_EMPRENDEDOR"]);
            $user8->setPassword($passwordEncoder->encodePassword(
                $user8,
                $user8->getUsername()
                )
            );
            $manager->persist($user8);

            
            $user9=new User();
            $user9->setUsername('im.cofue');
            $user9->setRoles(["ROLE_EMPRENDEDOR"]);
            $user9->setPassword($passwordEncoder->encodePassword(
                $user9,
                $user9->getUsername()
                )
            );
            $manager->persist($user9);

            
            $user10=new User();
            $user10->setUsername('k.hami');
            $user10->setRoles(["ROLE_EMPRENDEDOR"]);
            $user10->setPassword($passwordEncoder->encodePassword(
                $user10,
                $user10->getUsername()
                )
            );
            $manager->persist($user10);

            
            $user11=new User();
            $user11->setUsername('j.fuentes');
            $user11->setRoles(["ROLE_EMPRENDEDOR"]);
            $user11->setPassword($passwordEncoder->encodePassword(
                $user11,
                $user11->getUsername()
                )
            );
            $manager->persist($user11);

            
            $user12=new User();
            $user12->setUsername('c.satuff');
            $user12->setRoles(["ROLE_EMPRENDEDOR"]);
            $user12->setPassword($passwordEncoder->encodePassword(
                $user12,
                $user12->getUsername()
                )
            );
            $manager->persist($user12);

            
            $user13=new User();
            $user13->setUsername('e.ramirez');
            $user13->setRoles(["ROLE_EMPRENDEDOR"]);
            $user13->setPassword($passwordEncoder->encodePassword(
                $user13,
                $user13->getUsername()
                )
            );
            $manager->persist($user13);

            
            $user14=new User();
            $user14->setUsername('d.loza');
            $user14->setRoles(["ROLE_EMPRENDEDOR"]);
            $user14->setPassword($passwordEncoder->encodePassword(
                $user14,
                $user14->getUsername()
                )
            );
            $manager->persist($user14);

            
            $user15=new User();
            $user15->setUsername('i.macagno');
            $user15->setRoles(["ROLE_EMPRENDEDOR"]);
            $user15->setPassword($passwordEncoder->encodePassword(
                $user15,
                $user15->getUsername()
                )
            );
            $manager->persist($user15);

            
            $user16=new User();
            $user16->setUsername('a.gomez');
            $user16->setRoles(["ROLE_EMPRENDEDOR"]);
            $user16->setPassword($passwordEncoder->encodePassword(
                $user16,
                $user16->getUsername()
                )
            );
            $manager->persist($user16);

            
            $user17=new User();
            $user17->setUsername('a.morel');
            $user17->setRoles(["ROLE_EMPRENDEDOR"]);
            $user17->setPassword($passwordEncoder->encodePassword(
                $user17,
                $user17->getUsername()
                )
            );
            $manager->persist($user17);

            
            $user18=new User();
            $user18->setUsername('v.machado');
            $user18->setRoles(["ROLE_EMPRENDEDOR"]);
            $user18->setPassword($passwordEncoder->encodePassword(
                $user18,
                $user18->getUsername()
                )
            );
            $manager->persist($user18);

            
            $user19=new User();
            $user19->setUsername('a.cisneros');
            $user19->setRoles(["ROLE_EMPRENDEDOR"]);
            $user19->setPassword($passwordEncoder->encodePassword(
                $user19,
                $user19->getUsername()
                )
            );
            $manager->persist($user19);

            
            $user20=new User();
            $user20->setUsername('n.benitez');
            $user20->setRoles(["ROLE_EMPRENDEDOR"]);
            $user20->setPassword($passwordEncoder->encodePassword(
                $user20,
                $user20->getUsername()
                )
            );
            $manager->persist($user20);

            
            $user21=new User();
            $user21->setUsername('j.bertoli');
            $user21->setRoles(["ROLE_EMPRENDEDOR"]);
            $user21->setPassword($passwordEncoder->encodePassword(
                $user21,
                $user21->getUsername()
                )
            );
            $manager->persist($user21);

            
            $user22=new User();
            $user22->setUsername('h.castillo');
            $user22->setRoles(["ROLE_EMPRENDEDOR"]);
            $user22->setPassword($passwordEncoder->encodePassword(
                $user22,
                $user22->getUsername()
                )
            );
            $manager->persist($user22);

            
            $user23=new User();
            $user23->setUsername('f.villafane');
            $user23->setRoles(["ROLE_EMPRENDEDOR"]);
            $user23->setPassword($passwordEncoder->encodePassword(
                $user23,
                $user23->getUsername()
                )
            );
            $manager->persist($user23);

            
            $user24=new User();
            $user24->setUsername('m.vera');
            $user24->setRoles(["ROLE_EMPRENDEDOR"]);
            $user24->setPassword($passwordEncoder->encodePassword(
                $user24,
                $user24->getUsername()
                )
            );
            $manager->persist($user24);

            
            $user25=new User();
            $user25->setUsername('l.streitenberguer');
            $user25->setRoles(["ROLE_EMPRENDEDOR"]);
            $user25->setPassword($passwordEncoder->encodePassword(
                $user25,
                $user25->getUsername()
                )
            );
            $manager->persist($user25);

            
            $user26=new User();
            $user26->setUsername('w.ozuna');
            $user26->setRoles(["ROLE_EMPRENDEDOR"]);
            $user26->setPassword($passwordEncoder->encodePassword(
                $user26,
                $user26->getUsername()
                )
            );
            $manager->persist($user26);

            
            $user27=new User();
            $user27->setUsername('k.acevedo');
            $user27->setRoles(["ROLE_EMPRENDEDOR"]);
            $user27->setPassword($passwordEncoder->encodePassword(
                $user27,
                $user27->getUsername()
                )
            );
            $manager->persist($user27);

            
            $user28=new User();
            $user28->setUsername('g.sequeira');
            $user28->setRoles(["ROLE_EMPRENDEDOR"]);
            $user28->setPassword($passwordEncoder->encodePassword(
                $user28,
                $user28->getUsername()
                )
            );
            $manager->persist($user28);

            
            $user29=new User();
            $user29->setUsername('f.alfonso');
            $user29->setRoles(["ROLE_EMPRENDEDOR"]);
            $user29->setPassword($passwordEncoder->encodePassword(
                $user29,
                $user29->getUsername()
                )
            );
            $manager->persist($user29);

            
            $user30=new User();
            $user30->setUsername('f.paez');
            $user30->setRoles(["ROLE_EMPRENDEDOR"]);
            $user30->setPassword($passwordEncoder->encodePassword(
                $user30,
                $user30->getUsername()
                )
            );
            $manager->persist($user30);

            
            $user31=new User();
            $user31->setUsername('s.aiep');
            $user31->setRoles(["ROLE_EMPRENDEDOR"]);
            $user31->setPassword($passwordEncoder->encodePassword(
                $user31,
                $user31->getUsername()
                )
            );
            $manager->persist($user31);

            
            $user32=new User();
            $user32->setUsername('c.pereyra');
            $user32->setRoles(["ROLE_EMPRENDEDOR"]);
            $user32->setPassword($passwordEncoder->encodePassword(
                $user32,
                $user32->getUsername()
                )
            );
            $manager->persist($user32);

            
            $user33=new User();
            $user33->setUsername('s.rojas');
            $user33->setRoles(["ROLE_EMPRENDEDOR"]);
            $user33->setPassword($passwordEncoder->encodePassword(
                $user33,
                $user33->getUsername()
                )
            );
            $manager->persist($user33);

            
            $user34=new User();
            $user34->setUsername('e.garcia');
            $user34->setRoles(["ROLE_EMPRENDEDOR"]);
            $user34->setPassword($passwordEncoder->encodePassword(
                $user34,
                $user34->getUsername()
                )
            );
            $manager->persist($user34);

            
            $user35=new User();
            $user35->setUsername('r.lopez');
            $user35->setRoles(["ROLE_EMPRENDEDOR"]);
            $user35->setPassword($passwordEncoder->encodePassword(
                $user35,
                $user35->getUsername()
                )
            );
            $manager->persist($user35);

            
            $user36=new User();
            $user36->setUsername('r.toloza');
            $user36->setRoles(["ROLE_EMPRENDEDOR"]);
            $user36->setPassword($passwordEncoder->encodePassword(
                $user36,
                $user36->getUsername()
                )
            );
            $manager->persist($user36);

            
            $user37=new User();
            $user37->setUsername('g.bolognia');
            $user37->setRoles(["ROLE_EMPRENDEDOR"]);
            $user37->setPassword($passwordEncoder->encodePassword(
                $user37,
                $user37->getUsername()
                )
            );
            $manager->persist($user37);

            
            $user38=new User();
            $user38->setUsername('h.otey');
            $user38->setRoles(["ROLE_EMPRENDEDOR"]);
            $user38->setPassword($passwordEncoder->encodePassword(
                $user38,
                $user38->getUsername()
                )
            );
            $manager->persist($user38);

            
            $user39=new User();
            $user39->setUsername('c.melgarejo');
            $user39->setRoles(["ROLE_EMPRENDEDOR"]);
            $user39->setPassword($passwordEncoder->encodePassword(
                $user39,
                $user39->getUsername()
                )
            );
            $manager->persist($user39);

            
            $user40=new User();
            $user40->setUsername('m.villegas');
            $user40->setRoles(["ROLE_EMPRENDEDOR"]);
            $user40->setPassword($passwordEncoder->encodePassword(
                $user40,
                $user40->getUsername()
                )
            );
            $manager->persist($user40);

            
            $user41=new User();
            $user41->setUsername('s.a.r.o.');
            $user41->setRoles(["ROLE_EMPRENDEDOR"]);
            $user41->setPassword($passwordEncoder->encodePassword(
                $user41,
                $user41->getUsername()
                )
            );
            $manager->persist($user41);

            
            $user42=new User();
            $user42->setUsername('d.goyenechea');
            $user42->setRoles(["ROLE_EMPRENDEDOR"]);
            $user42->setPassword($passwordEncoder->encodePassword(
                $user42,
                $user42->getUsername()
                )
            );
            $manager->persist($user42);

            
            $user43=new User();
            $user43->setUsername('l.irala');
            $user43->setRoles(["ROLE_EMPRENDEDOR"]);
            $user43->setPassword($passwordEncoder->encodePassword(
                $user43,
                $user43->getUsername()
                )
            );
            $manager->persist($user43);

            
            $user44=new User();
            $user44->setUsername('s.irala');
            $user44->setRoles(["ROLE_EMPRENDEDOR"]);
            $user44->setPassword($passwordEncoder->encodePassword(
                $user44,
                $user44->getUsername()
                )
            );
            $manager->persist($user44);

            
            $user45=new User();
            $user45->setUsername('r.giachetti');
            $user45->setRoles(["ROLE_EMPRENDEDOR"]);
            $user45->setPassword($passwordEncoder->encodePassword(
                $user45,
                $user45->getUsername()
                )
            );
            $manager->persist($user45);

            
            $user46=new User();
            $user46->setUsername('rutalsur');
            $user46->setRoles(["ROLE_EMPRENDEDOR"]);
            $user46->setPassword($passwordEncoder->encodePassword(
                $user46,
                $user46->getUsername()
                )
            );
            $manager->persist($user46);

            
            $user47=new User();
            $user47->setUsername('o.mingorance');
            $user47->setRoles(["ROLE_EMPRENDEDOR"]);
            $user47->setPassword($passwordEncoder->encodePassword(
                $user47,
                $user47->getUsername()
                )
            );
            $manager->persist($user47);

            
            $user48=new User();
            $user48->setUsername('c.millaqueo');
            $user48->setRoles(["ROLE_EMPRENDEDOR"]);
            $user48->setPassword($passwordEncoder->encodePassword(
                $user48,
                $user48->getUsername()
                )
            );
            $manager->persist($user48);

            
            $user49=new User();
            $user49->setUsername('n.antunez');
            $user49->setRoles(["ROLE_EMPRENDEDOR"]);
            $user49->setPassword($passwordEncoder->encodePassword(
                $user49,
                $user49->getUsername()
                )
            );
            $manager->persist($user49);

            
            $user50=new User();
            $user50->setUsername('j.bruzzo');
            $user50->setRoles(["ROLE_EMPRENDEDOR"]);
            $user50->setPassword($passwordEncoder->encodePassword(
                $user50,
                $user50->getUsername()
                )
            );
            $manager->persist($user50);

            
            $user51=new User();
            $user51->setUsername('d.gutierrez');
            $user51->setRoles(["ROLE_EMPRENDEDOR"]);
            $user51->setPassword($passwordEncoder->encodePassword(
                $user51,
                $user51->getUsername()
                )
            );
            $manager->persist($user51);

            
            $user52=new User();
            $user52->setUsername('a.cardozo');
            $user52->setRoles(["ROLE_EMPRENDEDOR"]);
            $user52->setPassword($passwordEncoder->encodePassword(
                $user52,
                $user52->getUsername()
                )
            );
            $manager->persist($user52);

            
            $user53=new User();
            $user53->setUsername('a.alvarez');
            $user53->setRoles(["ROLE_EMPRENDEDOR"]);
            $user53->setPassword($passwordEncoder->encodePassword(
                $user53,
                $user53->getUsername()
                )
            );
            $manager->persist($user53);

            
            $user54=new User();
            $user54->setUsername('s.algarbe');
            $user54->setRoles(["ROLE_EMPRENDEDOR"]);
            $user54->setPassword($passwordEncoder->encodePassword(
                $user54,
                $user54->getUsername()
                )
            );
            $manager->persist($user54);

            
            $user55=new User();
            $user55->setUsername('c.navarro');
            $user55->setRoles(["ROLE_EMPRENDEDOR"]);
            $user55->setPassword($passwordEncoder->encodePassword(
                $user55,
                $user55->getUsername()
                )
            );
            $manager->persist($user55);

            
            $user56=new User();
            $user56->setUsername('m.demtschinski');
            $user56->setRoles(["ROLE_EMPRENDEDOR"]);
            $user56->setPassword($passwordEncoder->encodePassword(
                $user56,
                $user56->getUsername()
                )
            );
            $manager->persist($user56);

            
            $user57=new User();
            $user57->setUsername('c.demelo');
            $user57->setRoles(["ROLE_EMPRENDEDOR"]);
            $user57->setPassword($passwordEncoder->encodePassword(
                $user57,
                $user57->getUsername()
                )
            );
            $manager->persist($user57);

            
            $user58=new User();
            $user58->setUsername('j.rockenbach');
            $user58->setRoles(["ROLE_EMPRENDEDOR"]);
            $user58->setPassword($passwordEncoder->encodePassword(
                $user58,
                $user58->getUsername()
                )
            );
            $manager->persist($user58);

            
            $user59=new User();
            $user59->setUsername('r.burgos');
            $user59->setRoles(["ROLE_EMPRENDEDOR"]);
            $user59->setPassword($passwordEncoder->encodePassword(
                $user59,
                $user59->getUsername()
                )
            );
            $manager->persist($user59);

            
            $user60=new User();
            $user60->setUsername('l.rogovski');
            $user60->setRoles(["ROLE_EMPRENDEDOR"]);
            $user60->setPassword($passwordEncoder->encodePassword(
                $user60,
                $user60->getUsername()
                )
            );
            $manager->persist($user60);

            
            $user61=new User();
            $user61->setUsername('m.meza');
            $user61->setRoles(["ROLE_EMPRENDEDOR"]);
            $user61->setPassword($passwordEncoder->encodePassword(
                $user61,
                $user61->getUsername()
                )
            );
            $manager->persist($user61);

            
            $user62=new User();
            $user62->setUsername('j.levin');
            $user62->setRoles(["ROLE_EMPRENDEDOR"]);
            $user62->setPassword($passwordEncoder->encodePassword(
                $user62,
                $user62->getUsername()
                )
            );
            $manager->persist($user62);

            
            $user63=new User();
            $user63->setUsername('j.vazques');
            $user63->setRoles(["ROLE_EMPRENDEDOR"]);
            $user63->setPassword($passwordEncoder->encodePassword(
                $user63,
                $user63->getUsername()
                )
            );
            $manager->persist($user63);

            
            $user64=new User();
            $user64->setUsername('c.gonzalez');
            $user64->setRoles(["ROLE_EMPRENDEDOR"]);
            $user64->setPassword($passwordEncoder->encodePassword(
                $user64,
                $user64->getUsername()
                )
            );
            $manager->persist($user64);

            
            $user65=new User();
            $user65->setUsername('a.castillo');
            $user65->setRoles(["ROLE_EMPRENDEDOR"]);
            $user65->setPassword($passwordEncoder->encodePassword(
                $user65,
                $user65->getUsername()
                )
            );
            $manager->persist($user65);

            
            $user66=new User();
            $user66->setUsername('a.guerra');
            $user66->setRoles(["ROLE_EMPRENDEDOR"]);
            $user66->setPassword($passwordEncoder->encodePassword(
                $user66,
                $user66->getUsername()
                )
            );
            $manager->persist($user66);

            
            $user67=new User();
            $user67->setUsername('e.oyarzo');
            $user67->setRoles(["ROLE_EMPRENDEDOR"]);
            $user67->setPassword($passwordEncoder->encodePassword(
                $user67,
                $user67->getUsername()
                )
            );
            $manager->persist($user67);

            
            $user68=new User();
            $user68->setUsername('s.altamirano');
            $user68->setRoles(["ROLE_EMPRENDEDOR"]);
            $user68->setPassword($passwordEncoder->encodePassword(
                $user68,
                $user68->getUsername()
                )
            );
            $manager->persist($user68);

            
            $user69=new User();
            $user69->setUsername('p.angoloff');
            $user69->setRoles(["ROLE_EMPRENDEDOR"]);
            $user69->setPassword($passwordEncoder->encodePassword(
                $user69,
                $user69->getUsername()
                )
            );
            $manager->persist($user69);

            
            $user70=new User();
            $user70->setUsername('r.soria');
            $user70->setRoles(["ROLE_EMPRENDEDOR"]);
            $user70->setPassword($passwordEncoder->encodePassword(
                $user70,
                $user70->getUsername()
                )
            );
            $manager->persist($user70);

            
            $user71=new User();
            $user71->setUsername('h.navarro');
            $user71->setRoles(["ROLE_EMPRENDEDOR"]);
            $user71->setPassword($passwordEncoder->encodePassword(
                $user71,
                $user71->getUsername()
                )
            );
            $manager->persist($user71);

            
            $user72=new User();
            $user72->setUsername('c.saleme');
            $user72->setRoles(["ROLE_EMPRENDEDOR"]);
            $user72->setPassword($passwordEncoder->encodePassword(
                $user72,
                $user72->getUsername()
                )
            );
            $manager->persist($user72);

            
            $user73=new User();
            $user73->setUsername('c.notti');
            $user73->setRoles(["ROLE_EMPRENDEDOR"]);
            $user73->setPassword($passwordEncoder->encodePassword(
                $user73,
                $user73->getUsername()
                )
            );
            $manager->persist($user73);

            
            $user74=new User();
            $user74->setUsername('j.maslov');
            $user74->setRoles(["ROLE_EMPRENDEDOR"]);
            $user74->setPassword($passwordEncoder->encodePassword(
                $user74,
                $user74->getUsername()
                )
            );
            $manager->persist($user74);

            
            $user75=new User();
            $user75->setUsername('p.villena');
            $user75->setRoles(["ROLE_EMPRENDEDOR"]);
            $user75->setPassword($passwordEncoder->encodePassword(
                $user75,
                $user75->getUsername()
                )
            );
            $manager->persist($user75);

            
            $user76=new User();
            $user76->setUsername('h.perez');
            $user76->setRoles(["ROLE_EMPRENDEDOR"]);
            $user76->setPassword($passwordEncoder->encodePassword(
                $user76,
                $user76->getUsername()
                )
            );
            $manager->persist($user76);

            
            $user77=new User();
            $user77->setUsername('a.tabanera');
            $user77->setRoles(["ROLE_EMPRENDEDOR"]);
            $user77->setPassword($passwordEncoder->encodePassword(
                $user77,
                $user77->getUsername()
                )
            );
            $manager->persist($user77);

            
            $user78=new User();
            $user78->setUsername('r.espinoza');
            $user78->setRoles(["ROLE_EMPRENDEDOR"]);
            $user78->setPassword($passwordEncoder->encodePassword(
                $user78,
                $user78->getUsername()
                )
            );
            $manager->persist($user78);


            $user79=new User();
            $user79->setUsername('j.gomez');
            $user79->setRoles(["ROLE_EMPRENDEDOR"]);
            $user79->setPassword($passwordEncoder->encodePassword(
                $user79,
                $user79->getUsername()
                )
            );
            $manager->persist($user79);


            $user80=new User();
            $user80->setUsername('c.maciel');
            $user80->setRoles(["ROLE_EMPRENDEDOR"]);
            $user80->setPassword($passwordEncoder->encodePassword(
                $user80,
                $user80->getUsername()
                )
            );
            $manager->persist($user80);


            $user81=new User();
            $user81->setUsername('l.alonso');
            $user81->setRoles(["ROLE_EMPRENDEDOR"]);
            $user81->setPassword($passwordEncoder->encodePassword(
                $user81,
                $user81->getUsername()
                )
            );
            $manager->persist($user81);


            $user82=new User();
            $user82->setUsername('expresscargas');
            $user82->setRoles(["ROLE_EMPRENDEDOR"]);
            $user82->setPassword($passwordEncoder->encodePassword(
                $user82,
                $user82->getUsername()
                )
            );
            $manager->persist($user82);


            $user83=new User();
            $user83->setUsername('e.guanuco');
            $user83->setRoles(["ROLE_EMPRENDEDOR"]);
            $user83->setPassword($passwordEncoder->encodePassword(
                $user83,
                $user83->getUsername()
                )
            );
            $manager->persist($user83);


            $user84=new User();
            $user84->setUsername('d.cejas');
            $user84->setRoles(["ROLE_EMPRENDEDOR"]);
            $user84->setPassword($passwordEncoder->encodePassword(
                $user84,
                $user84->getUsername()
                )
            );
            $manager->persist($user84);


            $user85=new User();
            $user85->setUsername('a.espinosa');
            $user85->setRoles(["ROLE_EMPRENDEDOR"]);
            $user85->setPassword($passwordEncoder->encodePassword(
                $user85,
                $user85->getUsername()
                )
            );
            $manager->persist($user85);


            $user86=new User();
            $user86->setUsername('c.delvalle');
            $user86->setRoles(["ROLE_EMPRENDEDOR"]);
            $user86->setPassword($passwordEncoder->encodePassword(
                $user86,
                $user86->getUsername()
                )
            );
            $manager->persist($user86);


            $user87=new User();
            $user87->setUsername('p.tangari');
            $user87->setRoles(["ROLE_EMPRENDEDOR"]);
            $user87->setPassword($passwordEncoder->encodePassword(
                $user87,
                $user87->getUsername()
                )
            );
            $manager->persist($user87);


            $user88=new User();
            $user88->setUsername('a.dobronic');
            $user88->setRoles(["ROLE_EMPRENDEDOR"]);
            $user88->setPassword($passwordEncoder->encodePassword(
                $user88,
                $user88->getUsername()
                )
            );
            $manager->persist($user88);


            $user89=new User();
            $user89->setUsername('a.oliva');
            $user89->setRoles(["ROLE_EMPRENDEDOR"]);
            $user89->setPassword($passwordEncoder->encodePassword(
                $user89,
                $user89->getUsername()
                )
            );
            $manager->persist($user89);


            $user90=new User();
            $user90->setUsername('o.vazquez');
            $user90->setRoles(["ROLE_EMPRENDEDOR"]);
            $user90->setPassword($passwordEncoder->encodePassword(
                $user90,
                $user90->getUsername()
                )
            );
            $manager->persist($user90);


            $user91=new User();
            $user91->setUsername('a.carrazco');
            $user91->setRoles(["ROLE_EMPRENDEDOR"]);
            $user91->setPassword($passwordEncoder->encodePassword(
                $user91,
                $user91->getUsername()
                )
            );
            $manager->persist($user91);


            $user92=new User();
            $user92->setUsername('n.villordo');
            $user92->setRoles(["ROLE_EMPRENDEDOR"]);
            $user92->setPassword($passwordEncoder->encodePassword(
                $user92,
                $user92->getUsername()
                )
            );
            $manager->persist($user92);


            $user93=new User();
            $user93->setUsername('m.deambroggi');
            $user93->setRoles(["ROLE_EMPRENDEDOR"]);
            $user93->setPassword($passwordEncoder->encodePassword(
                $user93,
                $user93->getUsername()
                )
            );
            $manager->persist($user93);


            $user94=new User();
            $user94->setUsername('g.brensz');
            $user94->setRoles(["ROLE_EMPRENDEDOR"]);
            $user94->setPassword($passwordEncoder->encodePassword(
                $user94,
                $user94->getUsername()
                )
            );
            $manager->persist($user94);


            $user95=new User();
            $user95->setUsername('j.adorno');
            $user95->setRoles(["ROLE_EMPRENDEDOR"]);
            $user95->setPassword($passwordEncoder->encodePassword(
                $user95,
                $user95->getUsername()
                )
            );
            $manager->persist($user95);


            $user96=new User();
            $user96->setUsername('a.zuniga');
            $user96->setRoles(["ROLE_EMPRENDEDOR"]);
            $user96->setPassword($passwordEncoder->encodePassword(
                $user96,
                $user96->getUsername()
                )
            );
            $manager->persist($user96);


            $user97=new User();
            $user97->setUsername('l.rivero');
            $user97->setRoles(["ROLE_EMPRENDEDOR"]);
            $user97->setPassword($passwordEncoder->encodePassword(
                $user97,
                $user97->getUsername()
                )
            );
            $manager->persist($user97);


            $user98=new User();
            $user98->setUsername('m.compagnoni');
            $user98->setRoles(["ROLE_EMPRENDEDOR"]);
            $user98->setPassword($passwordEncoder->encodePassword(
                $user98,
                $user98->getUsername()
                )
            );
            $manager->persist($user98);


            $user99=new User();
            $user99->setUsername('g.barbera');
            $user99->setRoles(["ROLE_EMPRENDEDOR"]);
            $user99->setPassword($passwordEncoder->encodePassword(
                $user99,
                $user99->getUsername()
                )
            );
            $manager->persist($user99);


            $user100=new User();
            $user100->setUsername('c.bremsz');
            $user100->setRoles(["ROLE_EMPRENDEDOR"]);
            $user100->setPassword($passwordEncoder->encodePassword(
                $user100,
                $user100->getUsername()
                )
            );
            $manager->persist($user100);


            $user101=new User();
            $user101->setUsername('v.costa');
            $user101->setRoles(["ROLE_EMPRENDEDOR"]);
            $user101->setPassword($passwordEncoder->encodePassword(
                $user101,
                $user101->getUsername()
                )
            );
            $manager->persist($user101);


            $user102=new User();
            $user102->setUsername('j.poblete');
            $user102->setRoles(["ROLE_EMPRENDEDOR"]);
            $user102->setPassword($passwordEncoder->encodePassword(
                $user102,
                $user102->getUsername()
                )
            );
            $manager->persist($user102);


            $user103=new User();
            $user103->setUsername('seisleones');
            $user103->setRoles(["ROLE_EMPRENDEDOR"]);
            $user103->setPassword($passwordEncoder->encodePassword(
                $user103,
                $user103->getUsername()
                )
            );
            $manager->persist($user103);


            $user104=new User();
            $user104->setUsername('i.florenzano');
            $user104->setRoles(["ROLE_EMPRENDEDOR"]);
            $user104->setPassword($passwordEncoder->encodePassword(
                $user104,
                $user104->getUsername()
                )
            );
            $manager->persist($user104);


            $user105=new User();
            $user105->setUsername('m.vallejos');
            $user105->setRoles(["ROLE_EMPRENDEDOR"]);
            $user105->setPassword($passwordEncoder->encodePassword(
                $user105,
                $user105->getUsername()
                )
            );
            $manager->persist($user105);


            $user106=new User();
            $user106->setUsername('f.mainero');
            $user106->setRoles(["ROLE_EMPRENDEDOR"]);
            $user106->setPassword($passwordEncoder->encodePassword(
                $user106,
                $user106->getUsername()
                )
            );
            $manager->persist($user106);


            $user107=new User();
            $user107->setUsername('b.balatto');
            $user107->setRoles(["ROLE_EMPRENDEDOR"]);
            $user107->setPassword($passwordEncoder->encodePassword(
                $user107,
                $user107->getUsername()
                )
            );
            $manager->persist($user107);


            $user108=new User();
            $user108->setUsername('f.coronel');
            $user108->setRoles(["ROLE_EMPRENDEDOR"]);
            $user108->setPassword($passwordEncoder->encodePassword(
                $user108,
                $user108->getUsername()
                )
            );
            $manager->persist($user108);


            $user109=new User();
            $user109->setUsername('a.martinez');
            $user109->setRoles(["ROLE_EMPRENDEDOR"]);
            $user109->setPassword($passwordEncoder->encodePassword(
                $user109,
                $user109->getUsername()
                )
            );
            $manager->persist($user109);


            $user110=new User();
            $user110->setUsername('a.detona');
            $user110->setRoles(["ROLE_EMPRENDEDOR"]);
            $user110->setPassword($passwordEncoder->encodePassword(
                $user110,
                $user110->getUsername()
                )
            );
            $manager->persist($user110);


            $user111=new User();
            $user111->setUsername('s.vargas');
            $user111->setRoles(["ROLE_EMPRENDEDOR"]);
            $user111->setPassword($passwordEncoder->encodePassword(
                $user111,
                $user111->getUsername()
                )
            );
            $manager->persist($user111);


            $user112=new User();
            $user112->setUsername('l.fregosini');
            $user112->setRoles(["ROLE_EMPRENDEDOR"]);
            $user112->setPassword($passwordEncoder->encodePassword(
                $user112,
                $user112->getUsername()
                )
            );
            $manager->persist($user112);


            $user113=new User();
            $user113->setUsername('s.rubio');
            $user113->setRoles(["ROLE_EMPRENDEDOR"]);
            $user113->setPassword($passwordEncoder->encodePassword(
                $user113,
                $user113->getUsername()
                )
            );
            $manager->persist($user113);


            $user114=new User();
            $user114->setUsername('a.rodriguez');
            $user114->setRoles(["ROLE_EMPRENDEDOR"]);
            $user114->setPassword($passwordEncoder->encodePassword(
                $user114,
                $user114->getUsername()
                )
            );
            $manager->persist($user114);


            $user115=new User();
            $user115->setUsername('r.gassman');
            $user115->setRoles(["ROLE_EMPRENDEDOR"]);
            $user115->setPassword($passwordEncoder->encodePassword(
                $user115,
                $user115->getUsername()
                )
            );
            $manager->persist($user115);


            $user116=new User();
            $user116->setUsername('l.davalos');
            $user116->setRoles(["ROLE_EMPRENDEDOR"]);
            $user116->setPassword($passwordEncoder->encodePassword(
                $user116,
                $user116->getUsername()
                )
            );
            $manager->persist($user116);


            $user117=new User();
            $user117->setUsername('f.barrios');
            $user117->setRoles(["ROLE_EMPRENDEDOR"]);
            $user117->setPassword($passwordEncoder->encodePassword(
                $user117,
                $user117->getUsername()
                )
            );
            $manager->persist($user117);


            $user118=new User();
            $user118->setUsername('p.alonso');
            $user118->setRoles(["ROLE_EMPRENDEDOR"]);
            $user118->setPassword($passwordEncoder->encodePassword(
                $user118,
                $user118->getUsername()
                )
            );
            $manager->persist($user118);


            $user119=new User();
            $user119->setUsername('r.rivero');
            $user119->setRoles(["ROLE_EMPRENDEDOR"]);
            $user119->setPassword($passwordEncoder->encodePassword(
                $user119,
                $user119->getUsername()
                )
            );
            $manager->persist($user119);


            $user120=new User();
            $user120->setUsername('c.rocha');
            $user120->setRoles(["ROLE_EMPRENDEDOR"]);
            $user120->setPassword($passwordEncoder->encodePassword(
                $user120,
                $user120->getUsername()
                )
            );
            $manager->persist($user120);


            $user121=new User();
            $user121->setUsername('m.ibarra');
            $user121->setRoles(["ROLE_EMPRENDEDOR"]);
            $user121->setPassword($passwordEncoder->encodePassword(
                $user121,
                $user121->getUsername()
                )
            );
            $manager->persist($user121);


            $user122=new User();
            $user122->setUsername('j.burgos');
            $user122->setRoles(["ROLE_EMPRENDEDOR"]);
            $user122->setPassword($passwordEncoder->encodePassword(
                $user122,
                $user122->getUsername()
                )
            );
            $manager->persist($user122);


            $user123=new User();
            $user123->setUsername('b.albornoz');
            $user123->setRoles(["ROLE_EMPRENDEDOR"]);
            $user123->setPassword($passwordEncoder->encodePassword(
                $user123,
                $user123->getUsername()
                )
            );
            $manager->persist($user123);


            $user124=new User();
            $user124->setUsername('i.rolon');
            $user124->setRoles(["ROLE_EMPRENDEDOR"]);
            $user124->setPassword($passwordEncoder->encodePassword(
                $user124,
                $user124->getUsername()
                )
            );
            $manager->persist($user124);


            $user125=new User();
            $user125->setUsername('j.barrozo');
            $user125->setRoles(["ROLE_EMPRENDEDOR"]);
            $user125->setPassword($passwordEncoder->encodePassword(
                $user125,
                $user125->getUsername()
                )
            );
            $manager->persist($user125);


            $user126=new User();
            $user126->setUsername('m.ortiz');
            $user126->setRoles(["ROLE_EMPRENDEDOR"]);
            $user126->setPassword($passwordEncoder->encodePassword(
                $user126,
                $user126->getUsername()
                )
            );
            $manager->persist($user126);


            $user127=new User();
            $user127->setUsername('p.maidana');
            $user127->setRoles(["ROLE_EMPRENDEDOR"]);
            $user127->setPassword($passwordEncoder->encodePassword(
                $user127,
                $user127->getUsername()
                )
            );
            $manager->persist($user127);


            $user128=new User();
            $user128->setUsername('r.borrego');
            $user128->setRoles(["ROLE_EMPRENDEDOR"]);
            $user128->setPassword($passwordEncoder->encodePassword(
                $user128,
                $user128->getUsername()
                )
            );
            $manager->persist($user128);


            $user129=new User();
            $user129->setUsername('o.delcarmen');
            $user129->setRoles(["ROLE_EMPRENDEDOR"]);
            $user129->setPassword($passwordEncoder->encodePassword(
                $user129,
                $user129->getUsername()
                )
            );
            $manager->persist($user129);


            $user130=new User();
            $user130->setUsername('v.mendoza');
            $user130->setRoles(["ROLE_EMPRENDEDOR"]);
            $user130->setPassword($passwordEncoder->encodePassword(
                $user130,
                $user130->getUsername()
                )
            );
            $manager->persist($user130);


            $user131=new User();
            $user131->setUsername('j.amarilla');
            $user131->setRoles(["ROLE_EMPRENDEDOR"]);
            $user131->setPassword($passwordEncoder->encodePassword(
                $user131,
                $user131->getUsername()
                )
            );
            $manager->persist($user131);


            $user132=new User();
            $user132->setUsername('c.fernandez');
            $user132->setRoles(["ROLE_EMPRENDEDOR"]);
            $user132->setPassword($passwordEncoder->encodePassword(
                $user132,
                $user132->getUsername()
                )
            );
            $manager->persist($user132);


            $user133=new User();
            $user133->setUsername('a.benites');
            $user133->setRoles(["ROLE_EMPRENDEDOR"]);
            $user133->setPassword($passwordEncoder->encodePassword(
                $user133,
                $user133->getUsername()
                )
            );
            $manager->persist($user133);


            $user134=new User();
            $user134->setUsername('r.fernandez');
            $user134->setRoles(["ROLE_EMPRENDEDOR"]);
            $user134->setPassword($passwordEncoder->encodePassword(
                $user134,
                $user134->getUsername()
                )
            );
            $manager->persist($user134);


            $user135=new User();
            $user135->setUsername('m.fernandez');
            $user135->setRoles(["ROLE_EMPRENDEDOR"]);
            $user135->setPassword($passwordEncoder->encodePassword(
                $user135,
                $user135->getUsername()
                )
            );
            $manager->persist($user135);


            $user136=new User();
            $user136->setUsername('g.almeida');
            $user136->setRoles(["ROLE_EMPRENDEDOR"]);
            $user136->setPassword($passwordEncoder->encodePassword(
                $user136,
                $user136->getUsername()
                )
            );
            $manager->persist($user136);


            $user137=new User();
            $user137->setUsername('j.guantay');
            $user137->setRoles(["ROLE_EMPRENDEDOR"]);
            $user137->setPassword($passwordEncoder->encodePassword(
                $user137,
                $user137->getUsername()
                )
            );
            $manager->persist($user137);


            $user138=new User();
            $user138->setUsername('keikruks');
            $user138->setRoles(["ROLE_EMPRENDEDOR"]);
            $user138->setPassword($passwordEncoder->encodePassword(
                $user138,
                $user138->getUsername()
                )
            );
            $manager->persist($user138);


            $user139=new User();
            $user139->setUsername('c.machado');
            $user139->setRoles(["ROLE_EMPRENDEDOR"]);
            $user139->setPassword($passwordEncoder->encodePassword(
                $user139,
                $user139->getUsername()
                )
            );
            $manager->persist($user139);


            $user140=new User();
            $user140->setUsername('c.cubas');
            $user140->setRoles(["ROLE_EMPRENDEDOR"]);
            $user140->setPassword($passwordEncoder->encodePassword(
                $user140,
                $user140->getUsername()
                )
            );
            $manager->persist($user140);


            $user141=new User();
            $user141->setUsername('camuzzi');
            $user141->setRoles(["ROLE_EMPRENDEDOR"]);
            $user141->setPassword($passwordEncoder->encodePassword(
                $user141,
                $user141->getUsername()
                )
            );
            $manager->persist($user141);


            $user142=new User();
            $user142->setUsername('s.luccieti');
            $user142->setRoles(["ROLE_EMPRENDEDOR"]);
            $user142->setPassword($passwordEncoder->encodePassword(
                $user142,
                $user142->getUsername()
                )
            );
            $manager->persist($user142);


            $user143=new User();
            $user143->setUsername('e.stabile');
            $user143->setRoles(["ROLE_EMPRENDEDOR"]);
            $user143->setPassword($passwordEncoder->encodePassword(
                $user143,
                $user143->getUsername()
                )
            );
            $manager->persist($user143);


            $user144=new User();
            $user144->setUsername('e.saleme');
            $user144->setRoles(["ROLE_EMPRENDEDOR"]);
            $user144->setPassword($passwordEncoder->encodePassword(
                $user144,
                $user144->getUsername()
                )
            );
            $manager->persist($user144);


            $user145=new User();
            $user145->setUsername('j.castao');
            $user145->setRoles(["ROLE_EMPRENDEDOR"]);
            $user145->setPassword($passwordEncoder->encodePassword(
                $user145,
                $user145->getUsername()
                )
            );
            $manager->persist($user145);


            $user146=new User();
            $user146->setUsername('c.padin');
            $user146->setRoles(["ROLE_EMPRENDEDOR"]);
            $user146->setPassword($passwordEncoder->encodePassword(
                $user146,
                $user146->getUsername()
                )
            );
            $manager->persist($user146);


            $user147=new User();
            $user147->setUsername('r.frazer');
            $user147->setRoles(["ROLE_EMPRENDEDOR"]);
            $user147->setPassword($passwordEncoder->encodePassword(
                $user147,
                $user147->getUsername()
                )
            );
            $manager->persist($user147);


            $user148=new User();
            $user148->setUsername('b.duca');
            $user148->setRoles(["ROLE_EMPRENDEDOR"]);
            $user148->setPassword($passwordEncoder->encodePassword(
                $user148,
                $user148->getUsername()
                )
            );
            $manager->persist($user148);


            $user149=new User();
            $user149->setUsername('m.moreno');
            $user149->setRoles(["ROLE_EMPRENDEDOR"]);
            $user149->setPassword($passwordEncoder->encodePassword(
                $user149,
                $user149->getUsername()
                )
            );
            $manager->persist($user149);


            $user150=new User();
            $user150->setUsername('v.torres');
            $user150->setRoles(["ROLE_EMPRENDEDOR"]);
            $user150->setPassword($passwordEncoder->encodePassword(
                $user150,
                $user150->getUsername()
                )
            );
            $manager->persist($user150);


            $user151=new User();
            $user151->setUsername('i.levin');
            $user151->setRoles(["ROLE_EMPRENDEDOR"]);
            $user151->setPassword($passwordEncoder->encodePassword(
                $user151,
                $user151->getUsername()
                )
            );
            $manager->persist($user151);


            $user152=new User();
            $user152->setUsername('e.waltter');
            $user152->setRoles(["ROLE_EMPRENDEDOR"]);
            $user152->setPassword($passwordEncoder->encodePassword(
                $user152,
                $user152->getUsername()
                )
            );
            $manager->persist($user152);


            $user153=new User();
            $user153->setUsername('sisne.srl');
            $user153->setRoles(["ROLE_EMPRENDEDOR"]);
            $user153->setPassword($passwordEncoder->encodePassword(
                $user153,
                $user153->getUsername()
                )
            );
            $manager->persist($user153);


            $user154=new User();
            $user154->setUsername('d.segovia');
            $user154->setRoles(["ROLE_EMPRENDEDOR"]);
            $user154->setPassword($passwordEncoder->encodePassword(
                $user154,
                $user154->getUsername()
                )
            );
            $manager->persist($user154);


            $user155=new User();
            $user155->setUsername('h.gutierrez');
            $user155->setRoles(["ROLE_EMPRENDEDOR"]);
            $user155->setPassword($passwordEncoder->encodePassword(
                $user155,
                $user155->getUsername()
                )
            );
            $manager->persist($user155);


            $user156=new User();
            $user156->setUsername('e.fernandez');
            $user156->setRoles(["ROLE_EMPRENDEDOR"]);
            $user156->setPassword($passwordEncoder->encodePassword(
                $user156,
                $user156->getUsername()
                )
            );
            $manager->persist($user156);


            $user157=new User();
            $user157->setUsername('c.borghi');
            $user157->setRoles(["ROLE_EMPRENDEDOR"]);
            $user157->setPassword($passwordEncoder->encodePassword(
                $user157,
                $user157->getUsername()
                )
            );
            $manager->persist($user157);


            $user158=new User();
            $user158->setUsername('r.gonzalez');
            $user158->setRoles(["ROLE_EMPRENDEDOR"]);
            $user158->setPassword($passwordEncoder->encodePassword(
                $user158,
                $user158->getUsername()
                )
            );
            $manager->persist($user158);


            $user159=new User();
            $user159->setUsername('j.olderburg');
            $user159->setRoles(["ROLE_EMPRENDEDOR"]);
            $user159->setPassword($passwordEncoder->encodePassword(
                $user159,
                $user159->getUsername()
                )
            );
            $manager->persist($user159);


            $user160=new User();
            $user160->setUsername('l.cequeira');
            $user160->setRoles(["ROLE_EMPRENDEDOR"]);
            $user160->setPassword($passwordEncoder->encodePassword(
                $user160,
                $user160->getUsername()
                )
            );
            $manager->persist($user160);


            
                    
        /** */

        /**EMPRENDIMIENTOS */
            $emprendimiento1=new Emprendimiento();
            $emprendimiento1->setRazonsocial('La Union');
            $emprendimiento1->setDireccion('Cerro Jeujepen 450');
            $emprendimiento1->setCuit(1000000);
            $emprendimiento1->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento1->setRubro($this->getReference("RUBRO_PANADERIA"));
            $emprendimiento1->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento1->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento1->setDescripcion($emprendimiento1->getRazonsocial().' - '.$emprendimiento1->getDireccion());
            $manager->persist($emprendimiento1);

            $emprendimiento2=new Emprendimiento();
            $emprendimiento2->setRazonsocial('Kiosco Las Hermanas');
            $emprendimiento2->setDireccion('Adolfo Alsina 667');
            $emprendimiento2->setCuit(1000000);
            $emprendimiento2->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento2->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento2->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento2->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento2->setDescripcion($emprendimiento2->getRazonsocial().' - '.$emprendimiento2->getDireccion());
            $emprendimiento2->setTitular($user2);
            $manager->persist($emprendimiento2);
            
            $emprendimiento3=new Emprendimiento();
            $emprendimiento3->setRazonsocial('Sol-Celeste');
            $emprendimiento3->setDireccion('Ángela Loig 252');
            $emprendimiento3->setCuit(1000000);
            $emprendimiento3->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento3->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento3->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento3->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento3->setDescripcion($emprendimiento3->getRazonsocial().' - '.$emprendimiento3->getDireccion());
            $emprendimiento3->setTitular($user3);
            $manager->persist($emprendimiento3);

            $emprendimiento4=new Emprendimiento();
            $emprendimiento4->setRazonsocial('Parrilla Don Carlos');
            $emprendimiento4->setDireccion('Ángela Loig 69');
            $emprendimiento4->setCuit(1000000);
            $emprendimiento4->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento4->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento4->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento4->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento4->setDescripcion($emprendimiento4->getRazonsocial().' - '.$emprendimiento4->getDireccion());
            $emprendimiento4->setTitular($user4);
            $manager->persist($emprendimiento4);

            $emprendimiento5=new Emprendimiento();
            $emprendimiento5->setRazonsocial('Rotisería del corazón');
            $emprendimiento5->setDireccion('Antonio Livacic 547');
            $emprendimiento5->setCuit(1000000);
            $emprendimiento5->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento5->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento5->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento5->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento5->setDescripcion($emprendimiento5->getRazonsocial().' - '.$emprendimiento5->getDireccion());
            $emprendimiento5->setTitular($user5);
            $manager->persist($emprendimiento5);

            $emprendimiento6=new Emprendimiento();
            $emprendimiento6->setRazonsocial('Cabañas Doly');
            $emprendimiento6->setDireccion('Antonio Livacic 827');
            $emprendimiento6->setCuit(1000000);
            $emprendimiento6->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento6->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento6->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento6->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento6->setDescripcion($emprendimiento6->getRazonsocial().' - '.$emprendimiento6->getDireccion());
            $emprendimiento6->setTitular($user6);
            $manager->persist($emprendimiento6);

            $emprendimiento7=new Emprendimiento();
            $emprendimiento7->setRazonsocial('Forestal Andorra Servicios');
            $emprendimiento7->setDireccion('Arturo Illia 884');
            $emprendimiento7->setCuit(1000000);
            $emprendimiento7->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento7->setRubro($this->getReference("RUBRO_FORESTAL_1"));
            $emprendimiento7->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento7->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento7->setDescripcion($emprendimiento7->getRazonsocial().' - '.$emprendimiento7->getDireccion());
            $emprendimiento7->setTitular($user7);
            $manager->persist($emprendimiento7);

            $emprendimiento8=new Emprendimiento();
            $emprendimiento8->setRazonsocial('Farmacia del Lago');
            $emprendimiento8->setDireccion('Avenida de los Shelknam 115');
            $emprendimiento8->setCuit(1000000);
            $emprendimiento8->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento8->setRubro($this->getReference("RUBRO_FARMACIA"));
            $emprendimiento8->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento8->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento8->setDescripcion($emprendimiento8->getRazonsocial().' - '.$emprendimiento8->getDireccion());
            $emprendimiento8->setTitular($user8);
            $manager->persist($emprendimiento8);

            $emprendimiento9=new Emprendimiento();
            $emprendimiento9->setRazonsocial('IM.CO.FUE');
            $emprendimiento9->setDireccion('Avenida de los Shelknam 147');
            $emprendimiento9->setCuit(1000000);
            $emprendimiento9->setTitular($user9);
            $emprendimiento9->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento9->setRubro($this->getReference("RUBRO_FERRETERIA"));
            $emprendimiento9->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento9->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento9->setDescripcion($emprendimiento9->getRazonsocial().' - '.$emprendimiento9->getDireccion());
            $manager->persist($emprendimiento9);

            $emprendimiento10=new Emprendimiento();
            $emprendimiento10->setRazonsocial('Los Amigos II');
            $emprendimiento10->setDireccion('Avenida de los Shelknam 147');
            $emprendimiento10->setCuit(1000000);
            $emprendimiento10->setTitular($user11);
            $emprendimiento10->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento10->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento10->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento10->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento10->setDescripcion($emprendimiento10->getRazonsocial().' - '.$emprendimiento10->getDireccion());
            $manager->persist($emprendimiento10);

            $emprendimiento11=new Emprendimiento();
            $emprendimiento11->setRazonsocial('Alusur SRL');
            $emprendimiento11->setDireccion('Avenida de los Shelknam 114');
            $emprendimiento11->setCuit(1000000);
            $emprendimiento11->setTitular($user12);
            $emprendimiento11->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento11->setRubro($this->getReference("RUBRO_FERRETERIA"));
            $emprendimiento11->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento11->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento11->setDescripcion($emprendimiento11->getRazonsocial().' - '.$emprendimiento11->getDireccion());
            $manager->persist($emprendimiento11);

            $emprendimiento12=new Emprendimiento();
            $emprendimiento12->setRazonsocial('Librería Grafito');
            $emprendimiento12->setDireccion('Avenida de los Shelknam 411');
            $emprendimiento12->setCuit(1000000);
            $emprendimiento12->setTitular($user13);
            $emprendimiento12->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento12->setRubro($this->getReference("RUBRO_LIBRERIA"));
            $emprendimiento12->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento12->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento12->setDescripcion($emprendimiento12->getRazonsocial().' - '.$emprendimiento12->getDireccion());
            $manager->persist($emprendimiento12);

            $emprendimiento13=new Emprendimiento();
            $emprendimiento13->setRazonsocial('D.E. Informática');
            $emprendimiento13->setDireccion('Avenida de los Shelknam 475');
            $emprendimiento13->setCuit(1000000);
            $emprendimiento13->setTitular($user14);
            $emprendimiento13->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento13->setRubro($this->getReference("RUBRO_INFORMATICA"));
            $emprendimiento13->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento13->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento13->setDescripcion($emprendimiento13->getRazonsocial().' - '.$emprendimiento13->getDireccion());
            $manager->persist($emprendimiento13);

            $emprendimiento14=new Emprendimiento();
            $emprendimiento14->setRazonsocial('Austral Propiedades');
            $emprendimiento14->setDireccion('Avenida de los Shelknam 430');
            $emprendimiento14->setCuit(1000000);
            $emprendimiento14->setTitular($user15);
            $emprendimiento14->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento14->setRubro($this->getReference("RUBRO_INMOBILIARIA"));
            $emprendimiento14->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento14->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento14->setDescripcion($emprendimiento14->getRazonsocial().' - '.$emprendimiento14->getDireccion());
            $manager->persist($emprendimiento14);

            $emprendimiento15=new Emprendimiento();
            $emprendimiento15->setRazonsocial('Lince Rent A Car');
            $emprendimiento15->setDireccion('Avenida de los Shelknam 147');
            $emprendimiento15->setCuit(1000000);
            $emprendimiento15->setTitular($user16);
            $emprendimiento15->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento15->setRubro($this->getReference("RUBRO_ALQUILER_AUTOS"));
            $emprendimiento15->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento15->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento15->setDescripcion($emprendimiento15->getRazonsocial().' - '.$emprendimiento15->getDireccion());
            $manager->persist($emprendimiento15);

            $emprendimiento16=new Emprendimiento();
            $emprendimiento16->setRazonsocial('Servicios Empresariales');
            $emprendimiento16->setDireccion('Cabo San Pablo 414');
            $emprendimiento16->setCuit(1000000);
            $emprendimiento16->setTitular($user17);
            $emprendimiento16->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento16->setRubro($this->getReference("RUBRO_CONSULTORA"));
            $emprendimiento16->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento16->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento16->setDescripcion($emprendimiento16->getRazonsocial().' - '.$emprendimiento16->getDireccion());
            $manager->persist($emprendimiento16);

            $emprendimiento17=new Emprendimiento();
            $emprendimiento17->setRazonsocial('Simplemente Vos');
            $emprendimiento17->setDireccion('Calafate 289');
            $emprendimiento17->setCuit(1000000);
            $emprendimiento17->setTitular($user18);
            $emprendimiento17->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento17->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento17->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento17->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento17->setDescripcion($emprendimiento17->getRazonsocial().' - '.$emprendimiento17->getDireccion());
            $manager->persist($emprendimiento17);

            $emprendimiento18=new Emprendimiento();
            $emprendimiento18->setRazonsocial('Consultorio Kinesiología');
            $emprendimiento18->setDireccion('El Calafate 449');
            $emprendimiento18->setCuit(1000000);
            $emprendimiento18->setTitular($user19);
            $emprendimiento18->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento18->setRubro($this->getReference("RUBRO_KINESIOLOGIA"));
            $emprendimiento18->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento18->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento18->setDescripcion($emprendimiento18->getRazonsocial().' - '.$emprendimiento18->getDireccion());
            $manager->persist($emprendimiento18);

            $emprendimiento19=new Emprendimiento();
            $emprendimiento19->setRazonsocial('4 Corazones');
            $emprendimiento19->setDireccion('El Calafate 173');
            $emprendimiento19->setCuit(1000000);
            $emprendimiento19->setTitular($user20);
            $emprendimiento19->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento19->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento19->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento19->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento19->setDescripcion($emprendimiento19->getRazonsocial().' - '.$emprendimiento19->getDireccion());
            $manager->persist($emprendimiento19);

            $emprendimiento20=new Emprendimiento();
            $emprendimiento20->setRazonsocial('Herrería Artesanal');
            $emprendimiento20->setDireccion('24 de Marzo 985');
            $emprendimiento20->setCuit(1000000);
            $emprendimiento20->setTitular($user21);
            $emprendimiento20->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento20->setRubro($this->getReference("RUBRO_HERRERIA"));
            $emprendimiento20->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento20->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento20->setDescripcion($emprendimiento20->getRazonsocial().' - '.$emprendimiento20->getDireccion());
            $manager->persist($emprendimiento20);

            $emprendimiento21=new Emprendimiento();
            $emprendimiento21->setRazonsocial('Sol de Tolhuin');
            $emprendimiento21->setDireccion('Cerro Jeujepen 453');
            $emprendimiento21->setCuit(1000000);
            $emprendimiento21->setTitular($user22);
            $emprendimiento21->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento21->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento21->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento21->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento21->setDescripcion($emprendimiento21->getRazonsocial().' - '.$emprendimiento21->getDireccion());
            $manager->persist($emprendimiento21);

            $emprendimiento22=new Emprendimiento();
            $emprendimiento22->setRazonsocial('Paseo Tolhuin');
            $emprendimiento22->setDireccion('Cerro Jeujepen 466');
            $emprendimiento22->setCuit(1000000);
            $emprendimiento22->setTitular($user23);
            $emprendimiento22->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento22->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento22->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento22->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento22->setDescripcion($emprendimiento22->getRazonsocial().' - '.$emprendimiento22->getDireccion());
            $manager->persist($emprendimiento22);

            $emprendimiento23=new Emprendimiento();
            $emprendimiento23->setRazonsocial('Victorina');
            $emprendimiento23->setDireccion('Cerro Jeujepen 472');
            $emprendimiento23->setCuit(1000000);
            $emprendimiento23->setTitular($user24);
            $emprendimiento23->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento23->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento23->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento23->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento23->setDescripcion($emprendimiento23->getRazonsocial().' - '.$emprendimiento23->getDireccion());
            $manager->persist($emprendimiento23);

            $emprendimiento24=new Emprendimiento();
            $emprendimiento24->setRazonsocial('Carpinsur');
            $emprendimiento24->setDireccion('Cerro Jeujepen 478');
            $emprendimiento24->setCuit(1000000);
            $emprendimiento24->setTitular($user25);
            $emprendimiento24->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento24->setRubro($this->getReference("RUBRO_MUEBLERIA_2"));
            $emprendimiento24->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento24->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento24->setDescripcion($emprendimiento24->getRazonsocial().' - '.$emprendimiento24->getDireccion());
            $manager->persist($emprendimiento24);

            $emprendimiento25=new Emprendimiento();
            $emprendimiento25->setRazonsocial('Evolution');
            $emprendimiento25->setDireccion('Cerro Jeujepen 483');
            $emprendimiento25->setCuit(1000000);
            $emprendimiento25->setTitular($user26);
            $emprendimiento25->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento25->setRubro($this->getReference("RUBRO_PELUQUERIA"));
            $emprendimiento25->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento25->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento25->setDescripcion($emprendimiento25->getRazonsocial().' - '.$emprendimiento25->getDireccion());
            $manager->persist($emprendimiento25);

            $emprendimiento26=new Emprendimiento();
            $emprendimiento26->setRazonsocial('La Roca');
            $emprendimiento26->setDireccion('Chepach 210');
            $emprendimiento26->setCuit(1000000);
            $emprendimiento26->setTitular($user27);
            $emprendimiento26->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento26->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento26->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento26->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento26->setDescripcion($emprendimiento26->getRazonsocial().' - '.$emprendimiento26->getDireccion());
            $manager->persist($emprendimiento26);

            $emprendimiento27=new Emprendimiento();
            $emprendimiento27->setRazonsocial('San Francisco');
            $emprendimiento27->setDireccion('Chepach 464');
            $emprendimiento27->setCuit(1000000);
            $emprendimiento27->setTitular($user29);
            $emprendimiento27->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento27->setRubro($this->getReference("RUBRO_MERCADO"));
            $emprendimiento27->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento27->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento27->setDescripcion($emprendimiento27->getRazonsocial().' - '.$emprendimiento27->getDireccion());
            $manager->persist($emprendimiento27);

            $emprendimiento28=new Emprendimiento();
            $emprendimiento28->setRazonsocial('Paez Favio Gabriel');
            $emprendimiento28->setDireccion('Cerro Jeujepen 478');
            $emprendimiento28->setCuit(1000000);
            $emprendimiento28->setTitular($user30);
            $emprendimiento28->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento28->setRubro($this->getReference("RUBRO_MOVIMIENTO_SUELO"));
            $emprendimiento28->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento28->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento28->setDescripcion($emprendimiento28->getRazonsocial().' - '.$emprendimiento28->getDireccion());
            $manager->persist($emprendimiento28);

            $emprendimiento29=new Emprendimiento();
            $emprendimiento29->setRazonsocial('La Anonima');
            $emprendimiento29->setDireccion('Los Ñires 0');
            $emprendimiento29->setCuit(1000000);
            $emprendimiento29->setTitular($user31);
            $emprendimiento29->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento29->setRubro($this->getReference("RUBRO_MERCADO"));
            $emprendimiento29->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento29->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento29->setDescripcion($emprendimiento29->getRazonsocial().' - '.$emprendimiento29->getDireccion());
            $manager->persist($emprendimiento29);

            $emprendimiento30=new Emprendimiento();
            $emprendimiento30->setRazonsocial('Polirrubro NNYCKS');
            $emprendimiento30->setDireccion('Constitución Nacional 1344');
            $emprendimiento30->setCuit(1000000);
            $emprendimiento30->setTitular($user32);
            $emprendimiento30->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento30->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento30->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento30->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento30->setDescripcion($emprendimiento30->getRazonsocial().' - '.$emprendimiento30->getDireccion());
            $manager->persist($emprendimiento30);

            $emprendimiento31=new Emprendimiento();
            $emprendimiento31->setRazonsocial('Mi reina');
            $emprendimiento31->setDireccion('Constitución Nacional 1383');
            $emprendimiento31->setCuit(1000000);
            $emprendimiento31->setTitular($user33);
            $emprendimiento31->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento31->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento31->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento31->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento31->setDescripcion($emprendimiento31->getRazonsocial().' - '.$emprendimiento31->getDireccion());
            $manager->persist($emprendimiento31);

            $emprendimiento32=new Emprendimiento();
            $emprendimiento32->setRazonsocial('Peluquería Gauchito Gil');
            $emprendimiento32->setDireccion('Ernesto Loffler 256');
            $emprendimiento32->setCuit(1000000);
            $emprendimiento32->setTitular($user34);
            $emprendimiento32->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento32->setRubro($this->getReference("RUBRO_PELUQUERIA"));
            $emprendimiento32->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento32->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento32->setDescripcion($emprendimiento32->getRazonsocial().' - '.$emprendimiento32->getDireccion());
            $manager->persist($emprendimiento32);

            $emprendimiento33=new Emprendimiento();
            $emprendimiento33->setRazonsocial('BET-HEL Vial Tolhuin');
            $emprendimiento33->setDireccion('El Calafate 434');
            $emprendimiento33->setCuit(1000000);
            $emprendimiento33->setTitular($user35);
            $emprendimiento33->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento33->setRubro($this->getReference("RUBRO_MOVIMIENTO_SUELO"));
            $emprendimiento33->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento33->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento33->setDescripcion($emprendimiento33->getRazonsocial().' - '.$emprendimiento33->getDireccion());
            $manager->persist($emprendimiento33);

            $emprendimiento34=new Emprendimiento();
            $emprendimiento34->setRazonsocial('Kinesiología fisioterapia');
            $emprendimiento34->setDireccion('El Calafate 449');
            $emprendimiento34->setCuit(1000000);
            $emprendimiento34->setTitular($user19);
            $emprendimiento34->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento34->setRubro($this->getReference("RUBRO_KINESIOLOGIA"));
            $emprendimiento34->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento34->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento34->setDescripcion($emprendimiento34->getRazonsocial().' - '.$emprendimiento34->getDireccion());
            $manager->persist($emprendimiento34);

            $emprendimiento35=new Emprendimiento();
            $emprendimiento35->setRazonsocial('Atu Alcance');
            $emprendimiento35->setDireccion('Emilio Blanco 314');
            $emprendimiento35->setCuit(1000000);
            $emprendimiento35->setTitular($user36);
            $emprendimiento35->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento35->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento35->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento35->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento35->setDescripcion($emprendimiento35->getRazonsocial().' - '.$emprendimiento35->getDireccion());
            $manager->persist($emprendimiento35);

            $emprendimiento36=new Emprendimiento();
            $emprendimiento36->setRazonsocial('Joaquin');
            $emprendimiento36->setDireccion('Emilio Blanco 347');
            $emprendimiento36->setCuit(1000000);
            $emprendimiento36->setTitular($user37);
            $emprendimiento36->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento36->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento36->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento36->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento36->setDescripcion($emprendimiento36->getRazonsocial().' - '.$emprendimiento36->getDireccion());
            $manager->persist($emprendimiento36);

            $emprendimiento37=new Emprendimiento();
            $emprendimiento37->setRazonsocial('HGOM');
            $emprendimiento37->setDireccion('Emilio Fernandez 177');
            $emprendimiento37->setCuit(1000000);
            $emprendimiento37->setTitular($user38);
            $emprendimiento37->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento37->setRubro($this->getReference("RUBRO_TRANSPORTE"));
            $emprendimiento37->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento37->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento37->setDescripcion($emprendimiento37->getRazonsocial().' - '.$emprendimiento37->getDireccion());
            $manager->persist($emprendimiento37);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Austral Vending');
            $emprendimiento->setDireccion('Ernesto Campos 278');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user40);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_DISTRIBUIDORA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El rincon');
            $emprendimiento->setDireccion('Ernesto Campos 284');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user41);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Don Segundo sombra');
            $emprendimiento->setDireccion('Ernesto Campos 670');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user42);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_BAR"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Carpintería Lengas del Sur y SS');
            $emprendimiento->setDireccion('Ernesto Loffler 61');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user43);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_CARPINTERIA_2"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El chaqueño');
            $emprendimiento->setDireccion('Ernesto Loffler 66');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user45);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Hostería Rutalsur');
            $emprendimiento->setDireccion('Ernesto Campos 1656');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user46);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Cabañas Khami');
            $emprendimiento->setDireccion('Gendarmería Nacional 2219');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user47);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Camping Piuxen');
            $emprendimiento->setDireccion('Gendarmería Nacional');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user48);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Despensa Piuxen');
            $emprendimiento->setDireccion('Gendarmería Nacional');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user48);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_MERCADO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Casa de Campo Besta');
            $emprendimiento->setDireccion('Gendarmería Nacional 1800');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user49);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ARTESANIAS"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Sendero Indio');
            $emprendimiento->setDireccion('Gendarmería Nacional 2170');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user50);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_SERVICIOS_TURISTICOS"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Auto Repuestos Ushuaia');
            $emprendimiento->setDireccion('Ernesto Campos 514');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user51);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_LAVADERO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Los peques');
            $emprendimiento->setDireccion('Hector Campora 691');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user52);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Lavadero Agus');
            $emprendimiento->setDireccion('Hipolito Yrigoyen 124');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user53);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_LAVADERO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Carnicería Tolhuin');
            $emprendimiento->setDireccion('Lucas Bridges 629');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user83);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Paramaru');
            $emprendimiento->setDireccion('Lucas Bridges 300');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user84);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El San Juan');
            $emprendimiento->setDireccion('Lucas Bridges 327');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user85);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Pueblo Magico');
            $emprendimiento->setDireccion('Lucas Bridges 327');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user86);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_SALON"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Mueblería La Lola');
            $emprendimiento->setDireccion('Lucas Bridges 362');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user87);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_CARPINTERIA_2"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El remanso');
            $emprendimiento->setDireccion('Lucas Bridges esquina Metet');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user88);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_INMOBILIARIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El Cóndor');
            $emprendimiento->setDireccion('Lucas Bridges 150');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user89);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_FERRETERIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Super Tolhuin SRL');
            $emprendimiento->setDireccion('Lucas Bridges 218');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user90);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_MERCADO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Peluquería Imagen');
            $emprendimiento->setDireccion('Lucas Bridges 298');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user91);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_PELUQUERIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('FM RA');
            $emprendimiento->setDireccion('Lucas Bridges 617');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user92);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_RADIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Urano');
            $emprendimiento->setDireccion('Lucas Bridges 69');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user93);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El Padrino');
            $emprendimiento->setDireccion('Lucas Bridges 245');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user94);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_TELEFONIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Farmacia Tolhuin');
            $emprendimiento->setDireccion('Lucas Bridges 245');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user96);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_FARMACIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Junior');
            $emprendimiento->setDireccion('Lucas Bridges 267');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user72);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Me Matan! Limon');
            $emprendimiento->setDireccion('Lucas Bridges 317');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user97);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_BAR"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Casa Salco');
            $emprendimiento->setDireccion('Lucas Bridges 348');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user98);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El Almacen');
            $emprendimiento->setDireccion('Lucas Bridges 61');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user99);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_MERCADO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Locutorio NicoSoft');
            $emprendimiento->setDireccion('Lucas Bridges 219');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user100);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_LOCUTORIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Óptica Centro');
            $emprendimiento->setDireccion('Lucas Bridges 300');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user101);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_OPTICA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Dobronic Hnos.');
            $emprendimiento->setDireccion('Lucas Bridges y Metet');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user88);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_FERRETERIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('JAD');
            $emprendimiento->setDireccion('Lucas Bridges y Te-Al');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user102);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('La liquidadora');
            $emprendimiento->setDireccion('Maestro Cárdenas 308');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user103);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('J y J baby and kids');
            $emprendimiento->setDireccion('Maestro Cárdenas 342');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user104);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Mario Coiffer');
            $emprendimiento->setDireccion('Maestro Cárdenas 123');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user105);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_PELUQUERIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Mainero');
            $emprendimiento->setDireccion('Maestro Cárdenas 232');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user106);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_FERRETERIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Polirrubro Emanuel');
            $emprendimiento->setDireccion('Macizo 400 Parcela 8');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user107);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Demika');
            $emprendimiento->setDireccion('Pedro Oliva 632');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user129);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_TALLER_MECANICO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Multirrubro Levin');
            $emprendimiento->setDireccion('Lucas Bridges 271');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('ANSES');
            $emprendimiento->setDireccion('Rafaela Ishton 279');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user54);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PUBLICO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_OFICINA_PUBLICA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('La oma');
            $emprendimiento->setDireccion('Presidente Juan Peron 775');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user56);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El tropezón');
            $emprendimiento->setDireccion('Presidente Juan Peron 336');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user57);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Maderas Rockenbach');
            $emprendimiento->setDireccion('Juan Villa 371');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user58);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_MUEBLERIA_2"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Panchos');
            $emprendimiento->setDireccion('Juan Villa 462');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user59);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Ciro');
            $emprendimiento->setDireccion('Juan Villa 1');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user60);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Condor Services and company');
            $emprendimiento->setDireccion('Julio Castillo 6306');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user61);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_CONSULTORA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Multirrubro Levin');
            $emprendimiento->setDireccion('Ruta Nacional 3 Km 2935');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user62);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Posada de las flores');
            $emprendimiento->setDireccion('Ruta Nacional 3 Km 2938');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user63);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Estancia el Valdez');
            $emprendimiento->setDireccion('Ruta Nacional 3 Km 2900');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user64);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GANADERIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Cerrajería Riki');
            $emprendimiento->setDireccion('Kooshten 368');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user65);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_CERRAJERIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Rapipollo Lupita');
            $emprendimiento->setDireccion('Kooshten 314');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user66);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Oriana');
            $emprendimiento->setDireccion('Kooshten 88');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user67);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Isabella');
            $emprendimiento->setDireccion('Kooshten 374');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user68);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Bar Pool El Grillo');
            $emprendimiento->setDireccion('Leguizamon 170');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user70);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_BAR"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Taxi Coop');
            $emprendimiento->setDireccion('Leguizamon esquina Metet');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user71);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_TRANSPORTE"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Junio Urban');
            $emprendimiento->setDireccion('Ernesto Loffler 419');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user72);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Las retamas deco ambiente');
            $emprendimiento->setDireccion('Ernesto Loffler 15');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user73);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_MUEBLERIA_3"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Es Castor');
            $emprendimiento->setDireccion('Lola Kieps 501');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user74);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_MERCADO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Artesanías del Ecotono');
            $emprendimiento->setDireccion('Los Ñires 1032');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user75);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El Águila');
            $emprendimiento->setDireccion('Los Ñires 224');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user76);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_REPUESTOS_AUTOS"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Ona Luz');
            $emprendimiento->setDireccion('Los Ñires 771');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user77);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_FERRETERIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Lubricentro Tolhuin');
            $emprendimiento->setDireccion('Los Ñires 200');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user78);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_LUBRICENTRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('25 Street');
            $emprendimiento->setDireccion('Los Ñires 25');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user79);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Imperio');
            $emprendimiento->setDireccion('Lucas Bridges 268');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user81);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_BAR"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Express Cargas SRL');
            $emprendimiento->setDireccion('Lucas Bridges 300');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user82);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_TRANSPORTE_CARGA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Polirrubro Éxito');
            $emprendimiento->setDireccion('Pedro Oliva 680');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user133);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Banco Tierra del Fuego');
            $emprendimiento->setDireccion('Minkiol 331');
            $emprendimiento->setCuit(1000000);
            //$emprendimiento->setTitular($user)
            $emprendimiento->setAmbito($this->getReference("AMBITO_PUBLICO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_OFICINA_PUBLICA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Polirrubro La Familia');
            $emprendimiento->setDireccion('Adolfo Alsina 594');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user1);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Posada de los Ramirez');
            $emprendimiento->setDireccion('Avenida de los Shelknam 411');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user10);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('La soñada');
            $emprendimiento->setDireccion('Macizo 7 A Parcela 11');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user109);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Fletes Alberto');
            $emprendimiento->setDireccion('Maestro Cárdenas 600');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user110);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_TRANSPORTE_CARGA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Taller el abuelo');
            $emprendimiento->setDireccion('Mendoza 1954');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user111);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_TALLER_MECANICO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Aserradero Iguazú');
            $emprendimiento->setDireccion('Metet 64');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user112);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_FORESTAL_1"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Lengas');
            $emprendimiento->setDireccion('Metet 321');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user113);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('The Crosmutter Rose');
            $emprendimiento->setDireccion('Minkiol 278');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user115);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_VIVERO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Servicio Forestal y extracción de madera');
            $emprendimiento->setDireccion('Monte Maria 64');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user116);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_FORESTAL_2"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Reciclados Los Amigos');
            $emprendimiento->setDireccion('Macizo 165 Parcela 1');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user117);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_RECICLAJE"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            // $emprendimiento=new Emprendimiento();
            // $emprendimiento->setRazonsocial('');
            // $emprendimiento->setDireccion('');
            // $emprendimiento->setCuit(1000000);
            // $emprendimiento->setTitular($user)
            // $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            // $emprendimiento->setRubro($this->getReference("RUBRO"));
            // $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            // $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            // $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            // $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Acopiadora La Isla');
            $emprendimiento->setDireccion('Macizo 3000');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user118);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ACOPIADORA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Litoral');
            $emprendimiento->setDireccion('Zenone 68');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user119);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_FORESTAL_2"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Cabañas los nietos');
            $emprendimiento->setDireccion('Zenone 70');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user120);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Servicios de Agrimensura Ibarra');
            $emprendimiento->setDireccion('Pedro Cárcamo Vera 934');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user121);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_AGRIMENSURA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Servicios y transporte Mari');
            $emprendimiento->setDireccion('Pedro Oliva 1116');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user122);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_TRANSPORTE"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El rocío');
            $emprendimiento->setDireccion('Pedro Oliva 832');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user123);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Maderas del Sur');
            $emprendimiento->setDireccion('Pedro Oliva 892');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user124);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_MUEBLERIA_3"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Joaquin Barrozo');
            $emprendimiento->setDireccion('Pedro Oliva 947');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user125);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Fuego Express');
            $emprendimiento->setDireccion('Pedro Oliva 608');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user126);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Bichomania');
            $emprendimiento->setDireccion('Pedro Oliva 736');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user127);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_VETERINARIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('ADN');
            $emprendimiento->setDireccion('Pedro Oliva 1234');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user128);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GIMNASIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Autoservicio Tolhuin');
            $emprendimiento->setDireccion('Pedro Oliva 650');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user130);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_MERCADO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);


            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Crias y producción de codorniz');
            $emprendimiento->setDireccion('Pedro Oliva 832');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user131);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_AVICOLA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Nunatak');
            $emprendimiento->setDireccion('Pedro Oliva 617');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user132);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_AGENCIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Consultorio Odontologico');
            $emprendimiento->setDireccion('Policía Fueguina 527');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user134);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_AGENCIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Fernandez y Gallardo');
            $emprendimiento->setDireccion('Policía Fueguina 85');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user135);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_AGENCIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('La Esthercita');
            $emprendimiento->setDireccion('Ruta Nacional 3 Km 2930');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user137);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_BAR"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Hosteria Kaiken');
            $emprendimiento->setDireccion('Ruta Nacional 3 Km 2942');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user138);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Papel y lapiz');
            $emprendimiento->setDireccion('Rafaela Ishton 113');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user139);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_LIBRERIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('ESCUELA FUEGUINA DE INSTRUCCIÓN Y PERFECCIONAMIENTO AERONAUTICO');
            $emprendimiento->setDireccion('Rafaela Ishton 435');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user140);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PUBLICO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_EDUCACION"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Camuzzi gas del Sur');
            $emprendimiento->setDireccion('Rafaela Ishton 255');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user141);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PUBLICO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_OFICINA_PUBLICA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Springfield');
            $emprendimiento->setDireccion('Santiago Rupatini 297');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user142);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_BAR"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Consultorio Odontológico');
            $emprendimiento->setDireccion('Santiago Rupatini 480');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user143);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_CONSULTORIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('SK Servicios');
            $emprendimiento->setDireccion('Santiago Rupatini 480');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user144);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ASEGURADORA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Aserradero Don Vicente');
            $emprendimiento->setDireccion('Ruta Nacional 3 Km 2953');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user146);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_FORESTAL_1"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Terrazas del lago');
            $emprendimiento->setDireccion('Ruta Nacional 3 Km 2938');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user147);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_INMOBILIARIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Mercería Brodery');
            $emprendimiento->setDireccion('Santiago Rupatini 360');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user148);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('MN Muebleria');
            $emprendimiento->setDireccion('Santiago Rupatini 539');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user149);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_MUEBLERIA_2"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('El encuentro');
            $emprendimiento->setDireccion('Santiago Rupatini 492');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user150);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Shalom');
            $emprendimiento->setDireccion('Santiago Rupatini 665');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user151);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_AGRIMENSURA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Lubricentro Facu');
            $emprendimiento->setDireccion('Santiago Rupatini 480');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user152);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_LUBRICENTRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Sisne S.R.L.');
            $emprendimiento->setDireccion('Te-Al 427');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user153);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('La casona pizzeria');
            $emprendimiento->setDireccion('Te-Al 443');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user154);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Tienda Sara');
            $emprendimiento->setDireccion('Te-Al 488');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user155);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Feriantes Unidas');
            $emprendimiento->setDireccion('Te-Al 428');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user156);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Cumbres del Yehuin SRL');
            $emprendimiento->setDireccion('Toluken 145');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user157);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Cabañas del Fagnano');
            $emprendimiento->setDireccion('Toluken 145');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user158);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Olderburg Juan');
            $emprendimiento->setDireccion('Turbera Laguna Negra');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user159);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_TURBERA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('La nueva rotisería');
            $emprendimiento->setDireccion('Chepach 35');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user28);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Shadday');
            $emprendimiento->setDireccion('Emilio Fernandez 44');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user39);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Productos de limpieza Belén');
            $emprendimiento->setDireccion('Ernesto Krund 522');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user44);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Polirrubro Ezequiel');
            $emprendimiento->setDireccion('Cerro Jeujepen 451');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user55);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Cabañas las Lengas');
            $emprendimiento->setDireccion('Las Lengas 321');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user69);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ALOJAMIENTO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Full Time');
            $emprendimiento->setDireccion('Avenida de los Shelknam 139');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user80);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('La carnicería de Julio');
            $emprendimiento->setDireccion('Lucas Bridges 219');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user95);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Construcción Favio Coronel');
            $emprendimiento->setDireccion('Macizo 300 Parcela 7');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user108);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_CONSTRUCTORA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Personalizados MAH');
            $emprendimiento->setDireccion('Minkiol 331');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user114);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_COMERCIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Las cinco hermanas');
            $emprendimiento->setDireccion('Policia Fueguina 527');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user136);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_POLIRRUBRO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('ESTUDIO JURIDICO DR JULIAN ANTONIO CASTAO');
            $emprendimiento->setDireccion('Santiago Rupatini y Avenida de los Shelknam');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user145);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_ESTUDIO"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);

            $emprendimiento=new Emprendimiento();
            $emprendimiento->setRazonsocial('Holy Famili');
            $emprendimiento->setDireccion('Lucas Bridges 326');
            $emprendimiento->setCuit(1000000);
            $emprendimiento->setTitular($user160);
            $emprendimiento->setAmbito($this->getReference("AMBITO_PRIVADO"));
            $emprendimiento->setRubro($this->getReference("RUBRO_GASTRONOMIA"));
            $emprendimiento->setLatitud(-54.5337 + mt_rand() / mt_getrandmax() * (-54.4843 + 54.5337));
            $emprendimiento->setLongitud(-67.2216 + mt_rand() / mt_getrandmax() * (-67.1702 +67.2216));
            $emprendimiento->setDescripcion($emprendimiento->getRazonsocial().' - '.$emprendimiento->getDireccion());
            $manager->persist($emprendimiento);


        /** */

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            RubroFixtures::class,
        );
    }
}

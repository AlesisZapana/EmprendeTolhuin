<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200113200444 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        //$this->addSql('CREATE SEQUENCE ambito_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE emprendimiento_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE rubro_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        //$this->addSql('CREATE SEQUENCE sectorproductivo_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE contacto_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE foto_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        //$this->addSql('CREATE TABLE ambito (id INT NOT NULL, tipoambito VARCHAR(100) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE emprendimiento (id INT NOT NULL, ambito_id INT DEFAULT NULL, rubro_id INT NOT NULL, razonsocial VARCHAR(255) NOT NULL, direccion VARCHAR(255) DEFAULT NULL, cuit INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_3595288233A8A05 ON emprendimiento (ambito_id)');
        $this->addSql('CREATE INDEX IDX_359528896C5081 ON emprendimiento (rubro_id)');
        $this->addSql('CREATE TABLE rubro (id INT NOT NULL, sector_id INT NOT NULL, tipo VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_92866CEFDE95C867 ON rubro (sector_id)');
        //$this->addSql('CREATE TABLE sectorproductivo (id INT NOT NULL, nombre VARCHAR(100) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE contacto (id INT NOT NULL, emprendimiento_id INT NOT NULL, dato VARCHAR(255) NOT NULL, tipo VARCHAR(100) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_2741493C135D598D ON contacto (emprendimiento_id)');
        $this->addSql('CREATE TABLE foto (id INT NOT NULL, emprendimiento_id INT NOT NULL, nombre_foto VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_EADC3BE5135D598D ON foto (emprendimiento_id)');
        $this->addSql('ALTER TABLE emprendimiento ADD CONSTRAINT FK_3595288233A8A05 FOREIGN KEY (ambito_id) REFERENCES ambito (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE emprendimiento ADD CONSTRAINT FK_359528896C5081 FOREIGN KEY (rubro_id) REFERENCES rubro (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE rubro ADD CONSTRAINT FK_92866CEFDE95C867 FOREIGN KEY (sector_id) REFERENCES sectorproductivo (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE contacto ADD CONSTRAINT FK_2741493C135D598D FOREIGN KEY (emprendimiento_id) REFERENCES emprendimiento (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE foto ADD CONSTRAINT FK_EADC3BE5135D598D FOREIGN KEY (emprendimiento_id) REFERENCES emprendimiento (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE emprendimiento DROP CONSTRAINT FK_3595288233A8A05');
        $this->addSql('ALTER TABLE contacto DROP CONSTRAINT FK_2741493C135D598D');
        $this->addSql('ALTER TABLE foto DROP CONSTRAINT FK_EADC3BE5135D598D');
        $this->addSql('ALTER TABLE emprendimiento DROP CONSTRAINT FK_359528896C5081');
        $this->addSql('ALTER TABLE rubro DROP CONSTRAINT FK_92866CEFDE95C867');
        $this->addSql('DROP SEQUENCE ambito_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE emprendimiento_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE rubro_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE sectorproductivo_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE contacto_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE foto_id_seq CASCADE');
        $this->addSql('DROP TABLE ambito');
        $this->addSql('DROP TABLE emprendimiento');
        $this->addSql('DROP TABLE rubro');
        $this->addSql('DROP TABLE sectorproductivo');
        $this->addSql('DROP TABLE contacto');
        $this->addSql('DROP TABLE foto');
    }
}

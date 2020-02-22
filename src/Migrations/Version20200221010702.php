<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200221010702 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE solicitudes_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE solicitudes (id INT NOT NULL, ambito_id INT DEFAULT NULL, sectorproductivo_id INT DEFAULT NULL, razonsocial VARCHAR(100) NOT NULL, cuit BIGINT NOT NULL, direccion VARCHAR(200) NOT NULL, rubro VARCHAR(20) NOT NULL, telefono BIGINT DEFAULT NULL, mail VARCHAR(50) DEFAULT NULL, descripcion VARCHAR(255) NOT NULL, latitud DOUBLE PRECISION NOT NULL, longitud DOUBLE PRECISION NOT NULL, titularnombre VARCHAR(50) NOT NULL, titularapellido VARCHAR(50) NOT NULL, dni BIGINT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_216D110233A8A05 ON solicitudes (ambito_id)');
        $this->addSql('CREATE INDEX IDX_216D1102C085AE ON solicitudes (sectorproductivo_id)');
        $this->addSql('ALTER TABLE solicitudes ADD CONSTRAINT FK_216D110233A8A05 FOREIGN KEY (ambito_id) REFERENCES ambito (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE solicitudes ADD CONSTRAINT FK_216D1102C085AE FOREIGN KEY (sectorproductivo_id) REFERENCES sectorproductivo (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE solicitudes_id_seq CASCADE');
        $this->addSql('DROP TABLE solicitudes');
    }
}

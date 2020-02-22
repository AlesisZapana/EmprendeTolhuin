<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200221013152 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE solicitudes ADD estado_id INT NOT NULL');
        $this->addSql('ALTER TABLE solicitudes ADD CONSTRAINT FK_216D1109F5A440B FOREIGN KEY (estado_id) REFERENCES estadosolicitudes (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_216D1109F5A440B ON solicitudes (estado_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE solicitudes DROP CONSTRAINT FK_216D1109F5A440B');
        $this->addSql('DROP INDEX IDX_216D1109F5A440B');
        $this->addSql('ALTER TABLE solicitudes DROP estado_id');
    }
}

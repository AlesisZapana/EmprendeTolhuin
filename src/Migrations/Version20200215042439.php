<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200215042439 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE emprendimiento ADD titular_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE emprendimiento ADD CONSTRAINT FK_3595288F9F0FF64 FOREIGN KEY (titular_id) REFERENCES usuarios (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_3595288F9F0FF64 ON emprendimiento (titular_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE emprendimiento DROP CONSTRAINT FK_3595288F9F0FF64');
        $this->addSql('DROP INDEX IDX_3595288F9F0FF64');
        $this->addSql('ALTER TABLE emprendimiento DROP titular_id');
    }
}

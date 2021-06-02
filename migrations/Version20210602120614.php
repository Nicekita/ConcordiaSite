<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210602120614 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE player ADD cash DOUBLE PRECISION NOT NULL, CHANGE town_id town_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE realm ADD cash DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE town ADD cash DOUBLE PRECISION NOT NULL, CHANGE realm_id realm_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Player DROP cash, CHANGE town_id town_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Realm DROP cash');
        $this->addSql('ALTER TABLE Town DROP cash, CHANGE realm_id realm_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}

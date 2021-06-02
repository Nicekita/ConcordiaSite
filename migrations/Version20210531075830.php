<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210531075830 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE player CHANGE town_id town_id INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UUID_unique ON player (UUID)');
        $this->addSql('ALTER TABLE player RENAME INDEX idx_98197a6575e23604 TO IDX_9FB57F5375E23604');
        $this->addSql('ALTER TABLE town CHANGE realm_id realm_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UUID_unique ON Player');
        $this->addSql('ALTER TABLE Player CHANGE town_id town_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Player RENAME INDEX idx_9fb57f5375e23604 TO IDX_98197A6575E23604');
        $this->addSql('ALTER TABLE town CHANGE realm_id realm_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}

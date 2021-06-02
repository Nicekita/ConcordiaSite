<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210531080654 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE player CHANGE town_id town_id INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX RealmName_unique ON realm (Name)');
        $this->addSql('ALTER TABLE realm RENAME INDEX uniq_fa96dbdafc2d9ff7 TO UNIQ_3B57F4DEFC2D9FF7');
        $this->addSql('ALTER TABLE town CHANGE realm_id realm_id INT DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX TownName_unique ON town (Name)');
        $this->addSql('ALTER TABLE town RENAME INDEX idx_4ce6c7a49dff5f89 TO IDX_ECD4689A9DFF5F89');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Player CHANGE town_id town_id INT DEFAULT NULL');
        $this->addSql('DROP INDEX RealmName_unique ON Realm');
        $this->addSql('ALTER TABLE Realm RENAME INDEX uniq_3b57f4defc2d9ff7 TO UNIQ_FA96DBDAFC2D9FF7');
        $this->addSql('DROP INDEX TownName_unique ON Town');
        $this->addSql('ALTER TABLE Town CHANGE realm_id realm_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Town RENAME INDEX idx_ecd4689a9dff5f89 TO IDX_4CE6C7A49DFF5F89');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}

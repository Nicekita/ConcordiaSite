<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210502123229 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE news (id serial NOT NULL, header VARCHAR(255) NOT NULL, author VARCHAR(255) NOT NULL, date DATE NOT NULL, text LONGTEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE player (id serial NOT NULL, town_id INT DEFAULT NULL, uuid VARCHAR(255) NOT NULL, nick_name VARCHAR(255) NOT NULL, INDEX IDX_98197A6575E23604 (town_id), PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE realm (id serial NOT NULL, capital_id INT NOT NULL, name VARCHAR(255) NOT NULL, owner VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_FA96DBDAFC2D9FF7 (capital_id), PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE town (id serial NOT NULL, realm_id INT DEFAULT NULL, owner VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_4CE6C7A49DFF5F89 (realm_id), PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A6575E23604 FOREIGN KEY (town_id) REFERENCES town (id)');
        $this->addSql('ALTER TABLE realm ADD CONSTRAINT FK_FA96DBDAFC2D9FF7 FOREIGN KEY (capital_id) REFERENCES town (id)');
        $this->addSql('ALTER TABLE town ADD CONSTRAINT FK_4CE6C7A49DFF5F89 FOREIGN KEY (realm_id) REFERENCES realm (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE town DROP FOREIGN KEY FK_4CE6C7A49DFF5F89');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A6575E23604');
        $this->addSql('ALTER TABLE realm DROP FOREIGN KEY FK_FA96DBDAFC2D9FF7');
        $this->addSql('DROP TABLE news');
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP TABLE realm');
        $this->addSql('DROP TABLE town');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191028104559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE company (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, industry VARCHAR(255) NOT NULL, favourite BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO company (id, name, industry, favourite) VALUES (1, \'IQ-Optimize Software AG\', \'IT-Services\', 1)');
        $this->addSql('INSERT INTO company (id, name, industry, favourite) VALUES (2, \'1und1 Drillisch AG\', \'Telecommunication\', 1)');

        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO user (email, roles, password) VALUES (\'r.noack@iq-optimize.de\', \'\', \'***\');');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE user');
    }
}

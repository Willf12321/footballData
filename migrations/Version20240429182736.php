<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240429182736 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE fixture_stats (id INT AUTO_INCREMENT NOT NULL, fixture_id INT NOT NULL, team_id INT NOT NULL, shots_target INT NOT NULL, shots_total INT NOT NULL, possession INT NOT NULL, red_cards INT NOT NULL, passes_total INT NOT NULL, passes_percentage INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, team_id INT NOT NULL, name VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, points INT NOT NULL, goal_diff INT NOT NULL, form INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE home_fixture');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE home_fixture (id INT AUTO_INCREMENT NOT NULL, fixture_id INT NOT NULL, team_id INT NOT NULL, shots_target INT NOT NULL, shots_total INT NOT NULL, possession INT NOT NULL, red_cards INT NOT NULL, passes_total INT NOT NULL, passes_percentage INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE fixture_stats');
        $this->addSql('DROP TABLE team');
    }
}

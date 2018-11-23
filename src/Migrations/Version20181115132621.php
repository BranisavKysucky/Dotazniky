<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181115132621 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mesacny_zaznam (id INT AUTO_INCREMENT NOT NULL, otazka1_checkbox VARCHAR(255) DEFAULT NULL, otazka1_komentar VARCHAR(255) DEFAULT NULL, otazka2_checkbox VARCHAR(255) DEFAULT NULL, otazka2_komentar VARCHAR(255) DEFAULT NULL, otazka3_checkbox VARCHAR(255) DEFAULT NULL, otazka3_komentar VARCHAR(255) DEFAULT NULL, otazka4_checkbox VARCHAR(255) DEFAULT NULL, otazka4_komentar VARCHAR(255) DEFAULT NULL, otazka5_checkbox VARCHAR(255) DEFAULT NULL, otazka5_komentar VARCHAR(255) DEFAULT NULL, otazka6_checkbox VARCHAR(255) DEFAULT NULL, otazka6_komentar VARCHAR(255) DEFAULT NULL, otazka7_checkbox VARCHAR(255) DEFAULT NULL, otazka7_komentar VARCHAR(255) DEFAULT NULL, datum_vyplnenia DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nadriadeny (id INT AUTO_INCREMENT NOT NULL, meno VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tyzdenny_zaznam (id INT AUTO_INCREMENT NOT NULL, otazka1_checkbox VARCHAR(255) DEFAULT NULL, otazka1_komentar VARCHAR(255) DEFAULT NULL, otazka2_checkbox VARCHAR(255) DEFAULT NULL, otazka2_komentar VARCHAR(255) DEFAULT NULL, otazka3_checkbox VARCHAR(255) DEFAULT NULL, otazka3_komentar VARCHAR(255) DEFAULT NULL, otazka4_checkbox VARCHAR(255) DEFAULT NULL, otazka4_komentar VARCHAR(255) DEFAULT NULL, otazka5_checkbox VARCHAR(255) DEFAULT NULL, otazka5_komentar VARCHAR(255) DEFAULT NULL, otazka6_checkbox VARCHAR(255) DEFAULT NULL, otazka6_komentar VARCHAR(255) DEFAULT NULL, otazka7_checkbox VARCHAR(255) DEFAULT NULL, otazka7_komentar VARCHAR(255) DEFAULT NULL, otazka8_checkbox VARCHAR(255) DEFAULT NULL, otazka8_komentar VARCHAR(255) DEFAULT NULL, otazka9_checkbox VARCHAR(255) DEFAULT NULL, otazka9_komentar VARCHAR(255) DEFAULT NULL, datum_vyplnenia DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zamestnanec (id INT AUTO_INCREMENT NOT NULL, meno VARCHAR(255) DEFAULT NULL, datum_nastupu DATETIME DEFAULT NULL, typ_zmluvy VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mesacny_zaznam');
        $this->addSql('DROP TABLE nadriadeny');
        $this->addSql('DROP TABLE tyzdenny_zaznam');
        $this->addSql('DROP TABLE zamestnanec');
    }
}

<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181115141836 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE zamestnanec ADD nadriadeny_id INT NOT NULL, ADD tyzdenny_zaznam_id INT NOT NULL, ADD mesacny_zaznam_id INT NOT NULL');
        $this->addSql('ALTER TABLE zamestnanec ADD CONSTRAINT FK_1ADB89F838535BC9 FOREIGN KEY (nadriadeny_id) REFERENCES nadriadeny (id)');
        $this->addSql('ALTER TABLE zamestnanec ADD CONSTRAINT FK_1ADB89F84402B337 FOREIGN KEY (tyzdenny_zaznam_id) REFERENCES tyzdenny_zaznam (id)');
        $this->addSql('ALTER TABLE zamestnanec ADD CONSTRAINT FK_1ADB89F8A54156AF FOREIGN KEY (mesacny_zaznam_id) REFERENCES mesacny_zaznam (id)');
        $this->addSql('CREATE INDEX IDX_1ADB89F838535BC9 ON zamestnanec (nadriadeny_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1ADB89F84402B337 ON zamestnanec (tyzdenny_zaznam_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1ADB89F8A54156AF ON zamestnanec (mesacny_zaznam_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE zamestnanec DROP FOREIGN KEY FK_1ADB89F838535BC9');
        $this->addSql('ALTER TABLE zamestnanec DROP FOREIGN KEY FK_1ADB89F84402B337');
        $this->addSql('ALTER TABLE zamestnanec DROP FOREIGN KEY FK_1ADB89F8A54156AF');
        $this->addSql('DROP INDEX IDX_1ADB89F838535BC9 ON zamestnanec');
        $this->addSql('DROP INDEX UNIQ_1ADB89F84402B337 ON zamestnanec');
        $this->addSql('DROP INDEX UNIQ_1ADB89F8A54156AF ON zamestnanec');
        $this->addSql('ALTER TABLE zamestnanec DROP nadriadeny_id, DROP tyzdenny_zaznam_id, DROP mesacny_zaznam_id');
    }
}

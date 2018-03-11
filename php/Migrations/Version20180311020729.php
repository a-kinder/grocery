<?php declare(strict_types = 1);

namespace Nickel\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180311020729 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE keywords (id INT UNSIGNED NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE keywords_products (keyword_id INT UNSIGNED NOT NULL, product_id INT UNSIGNED NOT NULL, INDEX IDX_D4E6F6CB115D4552 (keyword_id), INDEX IDX_D4E6F6CB4584665A (product_id), PRIMARY KEY(keyword_id, product_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products (id INT UNSIGNED NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stores (id INT UNSIGNED NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products_stores (id INT UNSIGNED NOT NULL, product_id INT UNSIGNED DEFAULT NULL, store_id INT UNSIGNED DEFAULT NULL, price INT NOT NULL, INDEX IDX_53A3F7E64584665A (product_id), INDEX IDX_53A3F7E6B092A811 (store_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE keywords_products ADD CONSTRAINT FK_D4E6F6CB115D4552 FOREIGN KEY (keyword_id) REFERENCES keywords (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE keywords_products ADD CONSTRAINT FK_D4E6F6CB4584665A FOREIGN KEY (product_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_stores ADD CONSTRAINT FK_53A3F7E64584665A FOREIGN KEY (product_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE products_stores ADD CONSTRAINT FK_53A3F7E6B092A811 FOREIGN KEY (store_id) REFERENCES stores (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE keywords_products DROP FOREIGN KEY FK_D4E6F6CB115D4552');
        $this->addSql('ALTER TABLE keywords_products DROP FOREIGN KEY FK_D4E6F6CB4584665A');
        $this->addSql('ALTER TABLE products_stores DROP FOREIGN KEY FK_53A3F7E64584665A');
        $this->addSql('ALTER TABLE products_stores DROP FOREIGN KEY FK_53A3F7E6B092A811');
        $this->addSql('DROP TABLE keywords');
        $this->addSql('DROP TABLE keywords_products');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE stores');
        $this->addSql('DROP TABLE products_stores');
    }
}

CREATE DATABASE toko_sumber_makmur;
USE toko_bangunan;

----------------------------- PEMBUATAN TABLE ----------------------
CREATE TABLE jabatan(
	id_jabatan INT NOT NULL,
    nama_jabatan VARCHAR(100) NOT NULL,
    gaji INT(8) NOT NULL DEFAULT 0,
    PRIMARY KEY(id_jabatan)
);

CREATE TABLE karyawan(
	id_karyawan INT NOT NULL,
    id_jabatan INT NOT NULL,
    nama_karyawan VARCHAR(100) NOT NULL,
    alamat_karyawan TEXT NOT NULL,
    nomor_hp_karyawan VARCHAR(15) NOT NULL,
    status_karyawan VARCHAR(45),
    PRIMARY KEY(id_karyawan)
);

CREATE TABLE admin(
	id_admin INT NOT NULL,
    id_karyawan INT NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    PRIMARY KEY(id_admin),
    UNIQUE KEY(username)
);

CREATE TABLE supplier(
	id_supplier INT NOT NULL,
	nama_supplier VARCHAR(100),
    alamat_supplier TEXT,
    email_karyawan VARCHAR(50),
    PRIMARY KEY(id_supplier)
);

CREATE TABLE barang(
	id_barang INT NOT NULL,
    id_supplier INT NOT NULL,
    nama_barang VARCHAR(100),
    harga_barang INT(8) NOT NULL,
    stok_barang INT(4) NOT NULL,
    PRIMARY KEY (id_barang)
);

CREATE TABLE pelanggan(
	id_pelanggan INT NOT NULL,
    nama_pelanggan VARCHAR(100),
    alamat_pelanggan TEXT,
    nomor_hp_pelanggan VARCHAR(15),
    PRIMARY KEY (id_pelanggan)
);

CREATE TABLE pembayaran(
	id_pembayaran INT NOT NULL,
    tanggal_pembayaran DATE,
    PRIMARY KEY (id_pembayaran)
);

CREATE TABLE pemesanan(
	id_pemesanan INT NOT NULL,
    id_pembayaran INT NOT NULL,
    id_admin INT NOT NULL,
    id_pelanggan INT NOT NULL,
    id_barang INT NOT NULL,
    qty INT(2) NOT NULL,
    total INT(10) NOT NULL,
    PRIMARY KEY (id_pemesanan)
);



DESC admin;
DESC pelanggan;
DESC barang;
DESC karyawan;
DESC jabatan;
DESC pemesanan;
DESC supplier;
DESC pembayaran;

------------------------------------ MENGUBAH STRUKTUR TABLE --------------------------



ALTER TABLE karyawan
	ADD CONSTRAINT fk_karyawan_jabatan
		FOREIGN KEY (id_jabatan) REFERENCES jabatan(id_jabatan)
			ON UPDATE CASCADE ON DELETE NO ACTION;
            
ALTER TABLE admin
	ADD CONSTRAINT fk_admin_karyawan
		FOREIGN KEY (id_karyawan) REFERENCES karyawan(id_karyawan)
			ON UPDATE CASCADE ON DELETE NO ACTION;

ALTER TABLE barang
	ADD CONSTRAINT fk_barang_supplier
		FOREIGN KEY (id_supplier) REFERENCES supplier(id_supplier)
			ON UPDATE CASCADE ON DELETE NO ACTION;
            
ALTER TABLE pemesanan
	ADD CONSTRAINT fk_pemesanan_pembayaran
		FOREIGN KEY (id_pembayaran) REFERENCES pembayaran(id_pembayaran)
			ON UPDATE CASCADE ON DELETE RESTRICT;            

ALTER TABLE pemesanan
	ADD CONSTRAINT fk_pemesanan_admin
		FOREIGN KEY (id_admin) REFERENCES admin(id_admin)
			ON UPDATE CASCADE ON DELETE RESTRICT;
            
ALTER TABLE pemesanan
	ADD CONSTRAINT fk_pemesanan_barang
		FOREIGN KEY (id_barang) REFERENCES barang(id_barang)
			ON UPDATE CASCADE ON DELETE RESTRICT;
            
ALTER TABLE pemesanan
	ADD CONSTRAINT fk_pemesanan_pelanggan
		FOREIGN KEY (id_pelanggan) REFERENCES pelanggan(id_pelanggan)
			ON UPDATE CASCADE ON DELETE RESTRICT;
            

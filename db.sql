CREATE DATABASE flower_blog;

USE flower_blog;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO posts (title, content) VALUES 
('Pengertian Bunga Tulip', 'Tulip adalah bunga yang melambangkan keindahan dan kesempurnaan. Bunga ini berasal dari Turki dan memiliki beragam makna, termasuk cinta dan pengampunan.'),
('Manfaat Bunga bagi kesehatan', 'Bunga memiliki berbagai manfaat bagi kesehatan manusia yang telah diakui secara tradisional dan ditemukan oleh penelitian ilmiah modern. Salah satu manfaat utama bunga adalah kemampuannya untuk mengurangi stres dan meningkatkan mood. Aroma yang khas dan estetika yang menarik dari bunga dapat merangsang indra penciuman dan penglihatan, memicu pelepasan hormon endorfin yang membuat perasaan lebih positif dan menenangkan.'),
('Bagaimana perawatan bunga', 'Perawatan bunga sangat penting untuk menjaga keindahan dan kesehatannya. Hal pertama yang perlu diperhatikan adalah pemilihan tempat yang tepat untuk menanam bunga sesuai dengan kebutuhan cahaya matahari yang dibutuhkan.');

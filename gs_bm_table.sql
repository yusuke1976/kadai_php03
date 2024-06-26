-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql617.db.sakura.ne.jp
-- 生成日時: 2024 年 6 月 25 日 22:07
-- サーバのバージョン： 5.7.40-log
-- PHP のバージョン: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs-dev27-41_php02kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `worry` text NOT NULL,
  `book` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `coment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `worry`, `book`, `url`, `coment`, `date`) VALUES
(8, '中学英語レベルから、英語の勉強をしたい', '中学英語で読めるはじめての英語ミステリーノベル', 'https://www.nhk-book.co.jp/digicon/goods-000062133752023.html', 'あらすじも掲載されているため、辞書がなくても、中学英語でスラスラと推理小説が読めます！', '2024-06-23 21:36:03'),
(9, 'もう少しで50代です。充実した50代にするにはどうすればいいですか。', '50代にしておきたい17のこと', 'https://www.kinokuniya.co.jp/f/dsg-08-9987646727', '50代を充実させるにはどうすればいいか、ヒントとなる視点が、簡潔に書かれています！', '2024-06-23 21:39:14'),
(10, '今の会社を辞めたいです。しかし、周囲から反対されていて、会社を辞めるべきか悩んでいます。', 'バカとつき合うな', 'https://www.tokuma.jp/book/b494337.html', '人は、自分の経験したことをベースにアドバイスやコメントをしてきます。あなたのやりたいことを経験していない人（転職・起業経験のない人）のアドバイスや反対コメントは無視しましょう！', '2024-06-23 21:45:20'),
(11, '自分の判断に自信がありません', 'ゲッターズ飯田の五星三心占い', 'https://7net.omni7.jp/search/?keyword=gettersiida2025', '思い切って占いの本はいかがですか。新しい視点が手に入りますよ！', '2024-06-23 21:48:47'),
(12, '環境破壊が心配です。しかし、具体的に何をすればいいかわかりません。', 'グリーンブック', 'https://www.e-hon.ne.jp/bec/SA/Detail?refShinCode=0100000000000032072483&Action_id=121&Sza_id=F3', '本気で環境保護を「実践」しています！', '2024-06-23 21:51:48'),
(13, '海外旅行は高いので、国内で、安くて、日常を忘れられるようなところへ行きたい。', '地球の歩き方　東京の島々', 'https://hon.gakken.jp/book/2080215500', '関東にお住まいなら、伊豆七島はいかがですか。身近な「海外」ですよ！', '2024-06-23 22:07:06'),
(14, '海外初心者です。近場でおすすめはありますか。', '台湾　ランキング＆得テクニック', 'https://hon.gakken.jp/book/2080222500', '最初の海外渡航先として、台湾はいかがでしょうか。台湾のお得技と、観光案内がセットになった本です！', '2024-06-24 01:27:48'),
(15, '英語の勉強がつまらない', '最新　日米口語辞典', 'https://www.asahipress.com/bookdetail_lang/9784255012148/', '読む辞典です。サービス残業や、ない袖は振れぬなどが載っています！', '2024-06-24 01:58:05'),
(16, '雨', 'ああ', 'ああ', 'あああ', '2024-06-24 07:10:14');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

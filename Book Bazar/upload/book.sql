-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 08:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookbazaar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(1) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category_id` int(5) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `author`, `price`, `description`, `category_id`, `image`) VALUES
(88, 'Tracy Flick Can\'t Win', 'Tom Perrotta', 1100, 'From New York Times bestselling author Tom Perrotta, a pitch-perfect new satirical novel about ambition, coming-of-age in adulthood, and never really leaving high school politics behind—featuring his most iconic character of all time. ', 11111, 'upload/tracy flick can_t win.jpg'),
(89, 'To Paradise', 'Hanya Yanagihara', 365, 'From the author of the classic A Little Life, a bold, brilliant novel spanning three centuries and three different versions of the American experiment, about lovers, family, loss and the elusive promise of utopia.\r\n', 33333, 'upload/To Paradise.jpg'),
(90, 'The Kaiju Preservation Society', 'John Scalzi', 1500, 'The Kaiju Preservation Society is John Scalzi\'s first standalone adventure since the conclusion of his New York Times bestselling Interdependency trilogy.', 11111, 'upload/the kaiju preservation society.jpg'),
(91, 'The City Inside', 'Samit Basu', 2400, '“They\'d known the end times were coming but hadn’t known they’d be multiple choice.”', 11111, 'upload/the city inside.jpg'),
(92, 'Counterfeit', 'Kristin Chen', 2400, 'For fans of Hustlers and How to Get Filthy Rich in Rising Asia, the story of two Asian American women who band together to grow a counterfeit handbag scheme into a global enterprise--an incisive and glittering blend of fashion, crime, and friendship from the author of Bury What We Cannot Take and Soy Sauce for Beginners.', 11111, 'upload/counterfeit.jpg'),
(93, 'Book Lovers', 'Emily Henry', 699, 'One summer. Two rivals. A plot twist they didn\'t see coming....', 11111, 'upload/book lovers.jpg'),
(94, 'Black Cake', 'Charmaine Wilkerson', 959, 'We can’t choose what we inherit. But can we choose who we become? In present-day California, Eleanor Bennett’s death leaves behind a puzzling inheritance for her two children, Byron and Benny: a black cake, made from a family recipe with a long history, and a voice recording. In her message, Eleanor shares a tumultuous story about a headstrong young swimmer who escapes her island home under suspicion of murder.', 11111, 'upload/black cake.jpg'),
(95, 'Beyond Possible', 'Nimsdai Purja', 600, 'In Beyond Possible Nimsdai Purja tells the story of his life before his recent epic achievement of leading the team that scaled K2 in winter. He reveals how leadership, a willingness to learn, integrity and collaboration are essential qualities behind the world’s greatest mountaineering feats. Nimsdai is the first man ever to summit all 8000m ‘Death Zone’ peaks in less than 7 months, and this book reveals the man behind the climbs – how his early life in Nepal and Special Forces training made him the person to go beyond possible.', 22222, 'upload/beyond possible.jpg'),
(96, 'Sea of Tranquility', 'Emily St. John Mandel', 1800, 'A novel of art, time, love, and plague that takes the reader from Vancouver Island in 1912 to a dark colony on the moon three hundred years later, unfurling a story of humanity across centuries and space.', 11111, 'upload/Sea of Tranquility.jpg'),
(97, 'The Watchmaker of Filigree Str', 'Natasha Pulley', 650, 'Thaniel Steepleton returns home to his tiny London apartment to find a gold pocket watch on his pillow. Six months later, the mysterious timepiece saves his life, drawing him away from a blast that destroys Scotland Yard. At last, he goes in search of its maker, Keita Mori, a kind, lonely immigrant from Japan. Although Mori seems harmless, a chain of unexplainable events soon suggests he must be hiding something. When Grace Carrow, an Oxford physicist, unwittingly interferes, Thaniel is torn between opposing loyalties.', 11111, 'upload/The Watchmaker of Filigree Street.jpg'),
(98, 'The Lord of the Rings', 'J.R.R. Tolkien', 2500, 'Sumptuous slipcased edition of Tolkien’s classic epic tale of adventure, fully illustrated in colour for the first time by the author himself. Limited to a worldwide first printing of just 5,000 copies, this deluxe volume is quarterbound in leather and includes many special features unique to this edition. Since it was first published in 1954, The Lord of the Rings has been a book people have treasured. Steeped in unrivalled magic and otherworldliness, its sweeping fantasy and epic adventure has touched the hearts of young and old alike. Over 100 million copies of its many editions have been sold around the world, and occasional collectors’ editions become prized and valuable items of publishing.', 11111, 'upload/The Lord of the RIngs.jpg'),
(99, 'The Hunger Games', 'Suzanne Collins', 1800, 'In the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. The Capitol is harsh and cruel and keeps the districts in line by forcing them all to send one boy and one girl between the ages of twelve and eighteen to participate in the annual Hunger Games, a fight to the death on live TV.', 11111, 'upload/The Hunger Games.jpg'),
(100, 'The Diary of a Young Girl', 'Anne Frank', 1750, 'Discovered in the attic in which she spent the last years of her life, Anne Frank’s remarkable diary has become a world classic—a powerful reminder of the horrors of war and an eloquent testament to the human spirit.', 22222, 'upload/The Diary of a Young Girl.jpg'),
(101, 'The Alchemist', 'Paulo Coelho', 750, 'Combining magic, mysticism, wisdom and wonder into an inspiring tale of self-discovery, The Alchemist has become a modern classic, selling millions of copies around the world and transforming the lives of countless readers across generations.', 11111, 'upload/The Alchemist.jpg'),
(102, 'Steve Jobs', 'Walter Isaacson', 2250, '\'Walter Isaacson\'s worldwide bestselling biography of Apple cofounder Steve Jobs. Based on more than forty interviews with Steve Jobs conducted over two years--as well as interviews with more than 100 family members, friends, adversaries, competitors, and colleagues--Walter Isaacson has written a riveting story of the roller-coaster life and searingly intense personality of a creative entrepreneur whose passion for perfection and ferocious drive revolutionized six industries: personal computers, animated movies, music, phones, tablet computing, and digital publishing.', 22222, 'upload/Steve Jobs.jpg'),
(103, 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', 798, 'Rich Dad Poor Dad is Robert\'s story of growing up with two dads — his real father and the father of his best friend, his \"rich dad\" and the ways in which both men shaped his thoughts about money and investing. The book explodes the myth that you need to earn a high income to be rich and explains the difference between working for money and having your money work for you.', 44444, 'upload/Rich Dad Poor Dad.jpg'),
(104, 'It Stars With Us', 'Colleen Hoover', 2450, 'Before It Ends with Us, it started with Atlas. Colleen Hoover tells fan favorite Atlas’ side of the story and shares what comes next in this long-anticipated sequel to the book.', 11111, 'upload/It Stars With Us.jpg'),
(105, 'Harry Potter And The Sorcerer\'', 'J.K Rowling', 1765, 'Harry Potter, an eleven-year-old orphan, discovers that he is a wizard and is invited to study at Hogwarts. Even as he escapes a dreary life and enters a world of magic, he finds trouble awaiting him.', 11111, 'upload/Harry Potter And The Sorcerer\'s Stone.jpg'),
(106, 'Einstein : His Life And Univer', 'Walter Isaacson', 1080, 'Einstein was a rebel and nonconformist from boyhood days, and these character traits drove both his life and his science. In this narrative, Walter Isaacson explains how his mind worked and the mysteries of the universe that he discovered.', 22222, 'upload/Einstein His Life And Universe.jpg'),
(107, 'The Open Road', 'Pico Iyer', 500, 'One of the most acclaimed and perceptive observers of globalism and Buddhism now gives us the first serious consideration for Buddhist and non-Buddhist alike of the Fourteenth Dalai Lama\'s work and ideas as a politician, scientist, and philosopher.', 22222, 'upload/the open road.jpg'),
(108, 'Under The Banner of Heaven', 'Jon Krakauer', 638, 'A multilayered, bone-chilling narrative of messianic delusion, savage violence, polygamy, and unyielding faith. This is vintage Krakauer, an utterly compelling work of nonfiction that illuminates an otherwise confounding realm of human behavior.', 22222, 'upload/under the banner of heaven.jpg'),
(109, 'Think Like a Monk', 'Jay Shetty', 798, 'Jay Shetty, social media superstar and host of the #1 podcast On Purpose, distills the timeless wisdom he learned as a monk into practical steps anyone can take every day to live a less anxious, more meaningful life.', 44444, 'upload/think like a monk.jpg'),
(110, 'Youth and Truth', 'Sadhguru', 318, 'Youth is a time of enormous energy. A lot of youth are in a confused state of mind. The youth of today\'s generation need clarity and balance. They have become the victims of social media information overload. Everywhere, there is compulsion. They are either addicted to smoking, alcohol, drugs and gruesome video materials. There\'s been substance abuse like never before.', 44444, 'upload/youth and truth.jpg'),
(111, 'The Power of your Subconscious', 'Dr. Joseph Murphy', 350, 'The Power of Your Subconscious Mind has been a bestseller since its first publication in 1963, selling many millions of copies since its original publication. It is one of the most brilliant and beloved spiritual self-help works of all time which can help you heal yourself, banish your fears, sleep better, enjoy better relationships and just feel happier. The techniques are simple and results come quickly. You can improve your relationships, your finances, your physical well-being.', 44444, 'upload/the power of your subconscious mind.jpg'),
(112, 'From Goddess to Mortal', 'Rashmila Shakya', 660, 'Shows a combination of innocence and power as reflected through the narratives the Rashmila Shakya.\r\n', 44444, 'upload/from goddess to mortal.jpg'),
(113, 'Offerings', 'Danielle Follmi, Olivier Follm', 1000, 'Danielle Follmi, Olivier Follm\', 1000, \'Offerings is a deeply thoughtful collection of wisdom and knowledge from Tibetan Buddhism. Based on the original title, published in 2003, this new edition showcases the best of the acclaimed book in a charming smaller format. Including stunning imagery, the book pairs each of its photographs with a choice Buddhist quote. The masters of Tibetan Buddhism—including His Holiness the Dalai Lama, Kalu Rinpoche, Chögyam Trungpa, Shabkar Tsogdruk Rangdrol, Jack Kornfield, and Arnaud Desjardins—convey their understanding of existence, presenting a vision of life that celebrates humanity and encourages continual self-improvement.', 44444, 'upload/offerings.jpg'),
(114, 'Hippie Dharma', 'Captain F.D, Colaabavala', 250, 'All the colour, romance, tragedy and adventure of the long-haired White sadhus and their bizzare subculture recaptured ', 44444, 'upload/hippie dharma.jpg'),
(115, 'Genghis Khan and The Making of', 'Jack Weatherford', 1349, 'The name Genghis Khan often conjures the image of a relentless, bloodthirsty barbarian on horseback leading a ruthless band of nomadic warriors in the looting of the civilized world. But the surprising truth is that Genghis Khan was a visionary leader whose conquests joined backward Europe with the flourishing cultures of Asia to trigger a global awakening, an unprecedented explosion of technologies, trade, and ideas. In Genghis Khan and the Making of the Modern World, Jack Weatherford, the only Western scholar ever to be allowed into the Mongols’ “Great Taboo”—Genghis Khan’s homeland and forbidden burial site—tracks the astonishing story of Genghis Khan and his descendants, and their conquest and transformation of the world.', 33333, 'upload/genghis khan.jpg'),
(116, 'Guns, Germs, and Steel', 'Jared Diamond', 4599, 'Winner of the Pulitzer Prize and a national bestseller: the global account of the rise of civilization that is also a stunning refutation of ideas of human development based on race.\r\n', 33333, 'upload/guns germs and steel.jpg'),
(117, '1776', 'David McCullough', 1030, 'In this masterful book, David McCullough tells the intensely human story of those who marched with General George Washington in the year of the Declaration of Independence - when the whole American cause was riding on their success, without which all hope for independence would have been dashed and the noble ideals of the Declaration would have amounted to little more than words on paper.', 33333, 'upload/1776.jpg'),
(118, 'Gone with the Wind', 'Margaret Mitchell', 699, 'Scarlett O\'Hara, the beautiful, spoiled daughter of a well-to-do Georgia plantation owner, must use every means at her disposal to claw her way out of the poverty she finds herself in after Sherman\'s ', 33333, 'upload/gone with the wind.jpg'),
(119, 'Sapiens: A Brief History of Hu', 'Yuval Noah Harari', 2299, '100,000 years ago, at least six human species inhabited the earth. Today there is just one. Us. Homo sapiens.', 33333, 'upload/sapiens.jpg'),
(120, 'Shiva to Shankara', 'Devdutt Pattanaik', 638, 'Many modern scholars say Shiva’s linga is a phallic symbol. Most devotees disagree. Who is right? This book looks at the sexual metaphors associated with Shiva and uncovers the meaning beneath. In the process we discover how the symbol of Shiva is reflected in the story of Shiva’s marriage.', 55555, 'upload/shiva to shankara.jpg'),
(121, 'The Secret of the Nagas', 'Amish', 798, 'Today, He is a God. 4000 years ago, He was just a man. The hunt is on.\r\n', 55555, 'upload/the secrets of naga.jpg'),
(122, 'The Immortals of Meluha', 'Tripathi Amish', 798, '1900 BC. In what modern Indians mistakenly call the Indus Valley Civilisation. The inhabitants of that period called it the land of Meluha a near perfect empire created many centuries earlier by Lord Ram, one of the greatest monarchs that ever lived. ', 55555, 'upload/the immortal of meluha.jpg'),
(123, 'Norse Mythology', 'Neil Gaiman', 798, 'Introducing an instant classic—master storyteller Neil Gaiman presents a dazzling version of the great Norse myths. \r\n', 55555, 'upload/norse mythology.jpg'),
(124, 'Myths and Legends', 'Philip Wilkinson', 2238, 'Myths and legends are integral to all cultures. Their narratives, themes, and characters address and provide answers to eternal questions: where do we come from, how do we live, what do we believe in?', 55555, 'upload/myth and legends.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 10:16 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogger_blogs`
--

CREATE TABLE `blogger_blogs` (
  `id` int(11) NOT NULL,
  `blog_author` text NOT NULL,
  `blog_title` text NOT NULL,
  `blog_body` text NOT NULL,
  `blog_date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogger_blogs`
--

INSERT INTO `blogger_blogs` (`id`, `blog_author`, `blog_title`, `blog_body`, `blog_date_created`) VALUES
(24, 'Tony Stark', 'Who is Iron Man?', 'Iron Man is a fictional superhero appearing in American comic books published by Marvel Comics. The character was created by writer and editor Stan Lee, developed by scripter Larry Lieber, and designed by artists Don Heck and Jack Kirby. The character made his first appearance in Tales of Suspense #39 (cover dated March 1963).\r\n\r\nA wealthy American business magnate, playboy, and ingenious scientist, Anthony Edward "Tony" Stark suffers a severe chest injury during a kidnapping in which his captors attempt to force him to build a weapon of mass destruction. He instead creates a powered suit of armor to save his life and escape captivity. Later, Stark augments his suit with weapons and other technological devices he designed through his company, Stark Industries. He uses the suit and successive versions to protect the world as Iron Man, while at first concealing his true identity. Initially, Iron Man was a vehicle for Stan Lee to explore Cold War themes, particularly the role of American technology and industry in the fight against communism.[1] Subsequent re-imaginings of Iron Man have transitioned from Cold War motifs to contemporary matters of the time.[1]\r\n\r\nThroughout most of the character''s publication history, Iron Man has been a founding member of the superhero team the Avengers and has been featured in several incarnations of his own various comic book series. Iron Man has been adapted for several animated TV shows and films. The character is portrayed by Robert Downey Jr. in the live action film Iron Man (2008), which was a critical and box office success. Downey, who received much acclaim for his performance, reprised the role in a cameo in The Incredible Hulk (2008), two Iron Man sequels Iron Man 2 (2010) and Iron Man 3 (2013), The Avengers (2012), Avengers: Age of Ultron (2015), Captain America: Civil War (2016), and Spider-Man: Homecoming (2017), and will do so again in Avengers: Infinity War (2018) and its untitled sequel (2019) in the Marvel Cinematic Universe.\r\n\r\nIron Man was ranked 12th on IGN''s "Top 100 Comic Book Heroes" in 2011,[2] and third in their list of "The Top 50 Avengers" in 2012.[3]', '2018-04-07'),
(25, 'Tony Stark', 'My Origins', 'Anthony Edward Stark, the adopted son of wealthy industrialist and head of Stark Industries, Howard Stark, and Maria Stark. A boy genius, he enters MIT at the age of 15 to study electrical engineering and later receives master''s degrees in electrical engineering and physics. After his parents are killed in a car accident, he inherits his father''s company.\r\n\r\nStark is injured by a booby trap and captured by enemy forces led by Wong-Chu. Wong-Chu orders Stark to build weapons, but Stark''s injuries are dire and shrapnel is moving towards his heart. His fellow prisoner, Ho Yinsen, a Nobel Prize-winning physicist whose work Stark had greatly admired during college, constructs a magnetic chest plate to keep the shrapnel from reaching Stark''s heart. In secret, Stark and Yinsen use the workshop to design and construct a suit of powered armor, which Stark uses to escape. During the escape attempt, Yinsen sacrifices his life to save Stark''s by distracting the enemy as Stark recharges. Stark takes revenge on his kidnappers and rejoins the American forces, on his way meeting a wounded American Marine fighter pilot, James "Rhodey" Rhodes.', '2018-04-07'),
(26, 'Chris Evans', 'The First Avanger', 'Captain America: The First Avenger is a 2011 American superhero film based on the Marvel Comics character Captain America, produced by Marvel Studios and distributed by Paramount Pictures.[a] It is the fifth film in the Marvel Cinematic Universe (MCU). The film was directed by Joe Johnston, written by the writing team of Christopher Markus and Stephen McFeely, and stars Chris Evans as Steve Rogers / Captain America, alongside Tommy Lee Jones, Hugo Weaving, Hayley Atwell, Sebastian Stan, Dominic Cooper, Neal McDonough, Derek Luke, and Stanley Tucci. Set predominantly during World War II, Captain America: The First Avenger tells the story of Steve Rogers, a sickly man from Brooklyn who is transformed into super-soldier Captain America and must stop the Red Skull, who intends to use an artifact called the "Tesseract" as an energy-source for world domination.', '2018-04-07'),
(27, 'Thanos', 'The Mad Titan', 'Thanos (UK: /ËˆÎ¸Ã¦nÉ’s/, US: /ËˆÎ¸Ã¦noÊŠs/) is a fictional character appearing in American comic books published by Marvel Comics. Created by writer Mike Friedrich and writer-artist Jim Starlin, the character first appeared in Iron Man #55 (cover dated Feb. 1973).\r\n\r\nThe character appears in various Marvel Cinematic Universe films, including The Avengers (2012), portrayed by Damion Poitier, and Guardians of the Galaxy (2014), Avengers: Age of Ultron (2015), Avengers: Infinity War (2018), and its untitled sequel (2019), portrayed by Josh Brolin. The character has appeared in other Marvel-endorsed products, including animated television series, arcade, and video games.', '2018-04-07'),
(28, 'Peter Parker', 'Your Friendly Neighborhood Spiderman', 'Spider-Man is a fictional superhero appearing in American comic books published by Marvel Comics. The character was created by writer-editor Stan Lee and writer-artist Steve Ditko, and first appeared in the anthology comic book Amazing Fantasy #15 (August 1962) in the Silver Age of Comic Books. The character is conceived as an orphan within the Marvel Universe named Peter Parker being raised by his Aunt May and Uncle Ben in New York City after his parents Richard and Mary Parker were killed in a plane crash. Lee and Ditko depicted the character as having to deal with the normal struggles of adolescence and financial issues with a large array of supporting characters such as J. Jonah Jameson, Daily Bugle editor and smear campaigner of Spider-Man and classmates such as Flash Thompson, Harry Osborn and romantic interests, Gwen Stacy and Mary Jane Watson. His origin story depicts him as being bitten by a radioactive spider and thus acquiring spider-related power and abilities, such as the ability to cling to most surfaces, shoot spider-webs using wrist-mounted devices of his own invention, which he calls "web-shooters", and react to danger quickly with his "spider-sense", enabling him to combat his many superpowered foes, such as Doctor Octopus, Green Goblin and Venom. Also within the origin story, Spider-Man originally uses this power for stardom, but after letting a burglar escape who is responsible for shooting his uncle, he learns to use his power responsibly.', '2018-04-07'),
(29, 'Test Account', 'Hello, Name is Human', 'I am from a planet called earth.\r\n\r\nWe have water and plants. We sustain life', '2018-04-07'),
(30, 'Test Account', 'Lorem ipsum', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non-numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?', '2018-04-07'),
(31, 'Test Account', 'Bahrain GP: Raikkonen top as Hamilton struggles', 'Ferrari''s Kimi Raikkonen left struggling Mercedes trailing in final practice at the Bahrain Grand Prix.\r\n\r\nThe Finn was 0.5 seconds ahead of the Red Bulls of Max Verstappen and Daniel Ricciardo, while Lewis Hamilton was only fourth in his difficult Mercedes.\r\n\r\nHamilton headed Ferrari''s Sebastian Vettel by 0.028secs but the German had difficulties with loose bodywork early on and engine problems later.\r\n\r\nHamilton has a difficult race with a five-place grid penalty confirmed.\r\n\r\nIf he qualifies fastest later on Saturday, Hamilton will start sixth at best but in final practice the Mercedes looks to be the third fastest car around the Sakhir track.\r\n\r\nHamilton was clearly struggling with balance, locking wheels, suffering from under-steer in some corners and from oversteer in others.', '2018-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `blogger_users`
--

CREATE TABLE `blogger_users` (
  `id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_pass` text NOT NULL,
  `profile_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogger_users`
--

INSERT INTO `blogger_users` (`id`, `user_name`, `user_email`, `user_pass`, `profile_picture`) VALUES
(10, 'Tony Stark', 'stark@gmail.com', 'bb7c5ab96047dc9541c966ff1c1023a7', '1523129389.jpg'),
(11, 'Peter Parker', 'parker@gmail.com', 'ca8f3f3cb2d2b0c46b6406e4b7b5a4ec', '1523129441.jpg'),
(12, 'Thanos', 'thanos@gmail.com', '9fb3d3c54df3a856d70d7516dd4656d6', '1523129490.jpg'),
(13, 'Chris Evans', 'chris@gmail.com', '99491fc7a072b2d2860f39d572324e26', '1523130037.jpg'),
(14, 'Test Account', 'test@test.com', 'fb60707eb1113d13c098c4dd2c623164', '1523131447.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogger_blogs`
--
ALTER TABLE `blogger_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogger_users`
--
ALTER TABLE `blogger_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogger_blogs`
--
ALTER TABLE `blogger_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `blogger_users`
--
ALTER TABLE `blogger_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

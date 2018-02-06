
CREATE TABLE `texcote_exterior` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `texcote_exterior` (`id`, `title`, `price`, `description`, `image`, `date_added`) VALUES
(1, 'Brilliant white', '10500', 'Texcote-exterior', 'imgs/texcote-colors/brilliantwhite.png', '2017-02-01'),
(2, 'Delta green', '10500', 'Texcote-exterior', 'imgs/texcote-colors/deltagreen.png', '2017-02-02'),
(3, 'Gossamer', '10500', 'Texcote-exterior', 'imgs/texcote-colors/gossamer.png', '2017-02-03'),
(4, 'Salmon brown', '10500', 'Texcote-exterior', 'imgs/texcote-colors/salmonbrown.png', '2017-02-04'),
(5, 'Magnolia', '10500', 'Texcote-exterior', 'imgs/texcote-colors/magnolia.png', '2017-02-04'),
(6, 'Butter cream', '10500', 'Texcote-exterior', 'imgs/texcote-colors/buttercream.png', '2017-02-04'),
(7, 'Brick red', '10500', 'Texcote-exterior', 'imgs/texcote-colors/brickred.png', '2017-02-04'),
(8, 'Oka maize', '10500', 'Texcote-exterior', 'imgs/texcote-colors/okamaize.png', '2017-02-04'),
(9, 'Cameo', '10500', 'Texcote-exterior', 'imgs/texcote-colors/cameo.png', '2017-02-04'),
(10, 'Hamattan grey', '10500', 'Texcote-exterior', 'imgs/texcote-colors/hamattangrey.png', '2017-02-04'),
(11, 'Tarqua green', '10500', 'Texcote-exterior', 'imgs/texcote-colors/tarquagreen.png', '2017-02-04'),
(12, 'Russet', '10500', 'Texcote-exterior', 'imgs/texcote-colors/russet.png', '2017-02-04'),
(13, 'Sienna', '10500', 'Texcote-exterior', 'imgs/texcote-colors/sienna.png', '2017-02-04'),
(14, 'Bamboo', '10500', 'Texcote-exterior', 'imgs/texcote-colors/bamboo.png', '2017-02-04'),
(15, 'Casuarina', '10500', 'Texcote-exterior', 'imgs/texcote-colors/casuarina.png', '2017-02-04'),
(16, 'Coral red', '10500', 'Texcote-exterior', 'imgs/texcote-colors/coralred.png', '2017-02-04'),
(17, 'Off-white', '10500', 'Texcote-exterior', 'imgs/texcote-colors/offwhite.png', '2017-02-04'),
(18, 'Laterite red', '10500', 'Texcote-exterior', 'imgs/texcote-colors/laterite.png', '2017-02-04'),
(19, 'Abuja brown', '10500', 'Texcote-exterior', 'imgs/texcote-colors/abujabrown.png', '2017-02-04'),
(20, 'Concorde grey', '10500', 'Texcote-exterior', 'imgs/texcote-colors/concordegrey.png', '2017-02-04'),
(21, 'Chocolate', '10500', 'Texcote-exterior', 'imgs/texcote-colors/chocolate.png', '2017-02-04'),
(22, 'Coconut brown', '10500', 'Texcote-exterior', 'imgs/texcote-colors/coconutbrown.png', '2017-02-04'),
(23, 'Light green', '10500', 'Texcote-exterior', 'imgs/texcote-colors/lightgreen.png', '2017-02-04'),
(24, 'Pale beige', '10500', 'Texcote-exterior', 'imgs/texcote-colors/palebeige.png', '2017-02-04'),
(25, 'White', '10500', 'Texcote-exterior', 'imgs/texcote-colors/whie.png', '2017-02-04'),
(26, 'Black', '10500', 'Texcote-exterior', 'imgs/texcote-colors/black.png', '2017-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `emulsion_interior`
--

CREATE TABLE `emulsion_interior` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
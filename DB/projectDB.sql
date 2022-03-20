-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 02:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'yusra@admin.com', 'yusra'),
(2, 'sagal@admin.com', 'sagal');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `email`, `token`) VALUES
(18, 'yusra.abdi999@gmail.com', 'a7d9c7af8ee40cdd18ed2811481706dc60fd6dbe2b1a2'),
(19, 'yusra.abdi999@gmail.com', '12736276a61d13d1c9f656c047e3092260fd705dddf66'),
(20, 'yusra.abdi999@gmail.com', 'ec663b193534233c71116e1a5447a24160fd70a3d3573'),
(21, 'email@gmail.com', '1dd042fc1ab428a20387632064cf078961025fe902e3b'),
(22, 'yusra.abdi999@gmail.com', '6f0680c9350f693e4cc0e3a94ba8e4d9610270d9bdcf6'),
(23, 'yusra.abdi999@gmail.com', '82c3d1e0014ea275e1da962a067650f8610274be9abd2'),
(24, 'yusra.abdi999@gmail.com', 'c1a5396d4faf7d54007621b3663d6cce610fcb1b978fe');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `right_ans` int(11) NOT NULL,
  `wrong_ans` int(11) NOT NULL,
  `not_attempt` int(11) NOT NULL,
  `percenage` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `username`, `category`, `total_questions`, `right_ans`, `wrong_ans`, `not_attempt`, `percenage`, `date`) VALUES
(46, 'username', '76', 3, 3, 0, 0, 100, '2021-08-07 19:33:36'),
(47, 'username', '76', 3, 1, 2, 0, 33, '2021-08-07 19:37:55'),
(48, 'clover', '80', 10, 6, 4, 0, 60, '2021-08-08 10:39:27'),
(49, 'username', '79', 6, 3, 1, 2, 50, '2021-08-08 11:58:23'),
(50, 'username', '79', 6, 0, 6, 0, 0, '2021-08-08 11:59:05'),
(51, 'username', '79', 6, 0, 0, 6, 0, '2021-08-08 11:59:12'),
(52, 'username', '81', 10, 2, 1, 7, 20, '2021-08-08 12:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`) VALUES
(0, 'yazan', 'yazz@gmail.com', 'yaz0'),
(12, 'yusra111', 'yusra@gmail.com', 'yusra111'),
(13, 'username', 'username@gmail.com', 'password'),
(17, 'clover', 'clofi@gmail.com', 'clover'),
(21, 'yusra', 'yusra@gmail.com', 'yusra'),
(22, 'sagal', 'sagal@gmail.com', '123'),
(23, 'awo', 'awo@gmail.com', '123456'),
(24, 'maria121', 'maria@gmail.com', 'maria'),
(26, 'mary', 'maryy@gmail.com', 'marry'),
(27, 'mamyy', 'mamay@gmail.com', 'yusraa'),
(38, 'usernammee', 'email@gmail.com', 'yusra123'),
(41, 'yuyu', 'yuyu@gmail.com', 'yuyu'),
(42, 'hamda', 'hamd@gmail.com', '123456'),
(44, 'sjdklds', 'sdlds@gmail.com', '123456'),
(45, 'yuyu', 'yuyu@gmail.com', 'yuyu'),
(48, 'ohmyvenus', 'venus@gmail.com', 'yusra'),
(51, 'yusraaa', 'yusra.abdi999@gmail.com', 'yusra'),
(52, 'Amina', 'amy@email.com', '12345'),
(53, 'yara00', 'yara@example.com', 'yara00'),
(54, 'elissa', 'Alousa@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `chapter_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `subject`, `chapter_name`) VALUES
(68, 'Islamic', 'naxweee'),
(72, 'Islamic', 'mm'),
(74, 'Islamic', 'siirada | السيرة'),
(75, 'Islamic', 'Axaadis |الأحاديث '),
(76, 'Islamic', 'Fiqih | فقة'),
(77, 'Islamic', 'Quraan | القران'),
(78, 'Islamic', 'Caqiidada | عقيدة'),
(79, 'Chemistry', 'matter and It\'s Properties'),
(80, 'Chemistry', 'Atomic Structure and The periodic Table'),
(81, 'Chemistry', 'Chemical Bonding and Structures'),
(82, 'Chemistry', 'Acid, Base and Salts'),
(83, 'Chemistry', 'Organic Chemistry'),
(110, 'Physics', 'Measurement and Units'),
(111, 'Physics', 'Heat and temperature'),
(112, 'Physics', 'quantity of heat'),
(113, 'Physics', 'Light'),
(114, 'Physics', 'Dynamics'),
(115, 'Maths', 'Addition');

-- --------------------------------------------------------

--
-- Table structure for table `tblmcq`
--

CREATE TABLE `tblmcq` (
  `id` int(11) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmcq`
--

INSERT INTO `tblmcq` (`id`, `questions`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `category_id`) VALUES
(116, 'قتل حمزة النبي صلى الله عليه وسلم في غزة ', 'احد ', 'حنين', 'الأحزاب ', 'بدر', 'احد ', 74),
(117, 'اسم عثمان بن عفان رضي الله عنه عام', 'أربعة وثلاثين', 'اربعه واربعين', 'اربعة وعشرين', 'أربعة و خمسين', 'أربعة وثلاثين', 74),
(118, 'ممن أسلم على يد أبي بكر', 'علي بن أبي طالب', 'طلحة بن عبيد الله ', 'عثمان بن مظعون', 'عمر بن الخطاب', 'طلحة بن عبيد الله ', 74),
(119, 'عدد الجيش الإسلامي في فتح مكة كان', ' الف مقاتل', 'ثلاث آلاف مقاتل', 'عشرة آلاف مقاتل', 'ألفين', 'عشرة آلاف مقاتل', 74),
(120, 'من الملوك الذين كان لهم رسول الله صلى الله عليه وسلم ', 'رستم', 'يزدجر', 'هرقل', 'رستيم', 'هرقل', 74),
(121, 'وقعت معركة مؤتة في', 'جمادى الأولى سنة ثمانية من الهجرة ', 'ربيع الثاني سنة عشرين من الهجرة', 'رجب سنة أربعة وثلاثين من الهجرة', 'شعبان سنة ثالثة من الهجرة ', 'جمادى الأولى سنة ثمانية من الهجرة ', 74),
(122, 'امسك عمر بن الخطاب زمام الخلافة سنة', ' ١٣ من الهجرة ', '١٤ من الهجرة ', '١٥ من الهجرة  ', '١ من الهجرة  ', ' ١٣ من الهجرة ', 74),
(123, 'نزول القرآن على رسول الله صلى الله عليه وسلم ', '٢٥ عاما', '٢٤ عاما ', '٢٣ عاما', '٥٥ عاما', '٢٣ عاما', 74),
(124, 'وقعت غزوة بدر في ', 'سنة ٣ من الهجرة ', 'سنة ٢ من الهجرة ', 'سنة ٢ من البعثة ', 'سنة ٣ من البعثة', 'سنة ٢ من البعثة ', 74),
(125, 'مدة خلافة أبي بكر رضي الله عنه ', '٣ سنوات ', '٤ سنوات', 'سنتين', '٩ سنوات', 'سنتين', 74),
(126, 'كان أبو بكر رضي الله عنه ', 'أول خليفة المسلمين', 'ثاني خليفة المسلمين', 'ثالث خليفة المسلمين', 'رابع خليفة المسلمين ', 'أول خليفة المسلمين', 74),
(127, 'كان عمرو بن العاص رضي الله عنه ', 'حاكم مصر', 'حاكم الشام', 'حاكم العراق', 'حاكم المغرب ', 'حاكم مصر ', 74),
(128, 'إن من الناس من يجوع ولا يقوى على احتمال المصائب فيقدم على الانتحار و هذا ', 'يدل علي شجاعته ', 'يدل على تألمه', 'يدل على المحافظة على كرامته', 'يدل على جبنه وضعف نفسه', 'يدل على جبنه وضعف نفسه', 75),
(129, 'ليش الفرد في نظر الإسلام بلا مسؤولية وإنما هو ', 'مفضل على المجتمع ', 'مقبول أحيانا في المجتمع ', 'لبنة في صرح المجتمع', 'ليس عليه مسؤولية', 'لبنة في صرح المجتمع', 75),
(130, 'يدعو الرسول صلى الله عليه وسلم  الشباب إلي الزواج', 'متى يبلغوا سن الرشد ', 'متى طلب منهم ذلك ', 'متى أحبوا ذلك ', 'متى قدروا على تحمل مسؤولياته', 'متى قدروا على تحمل مسؤولياته', 75),
(131, 'من شروط وقوع الطلاق', 'التلفظ بالطلاق استهزاء', 'الطلاق في حالة الظهر', 'الطلاق أمام القاضي', 'الطلاق ثلاثا مرة واحدة', 'الطلاق في حالة الظهر', 75),
(132, 'شرع الإسلام الجهاد', 'الإكراه الناس على الدين', 'لإعلاء كلمة الله', 'للاستعباد والاستغلال', 'لقتل الكفار', 'لإعلاء كلمة الله', 75),
(133, 'المهر هو ', 'اسم المال الواجب للمرأة بالنكاح و الدخول', 'ما تحتاج إليه الزوجة من الطعام و كسوة', 'ما يعطي للمرأة بعد الطلاق', 'ما يعطي للمرأة قبل الزواج', 'اسم المال الواجب للمرأة بالنكاح و الدخول', 75),
(134, 'في الانتحار ', 'اعتراض على قضاء الله وقدره ويأس من رحمة الله.', 'تخلص من متاعب الحياة', 'إظهار الشجاعة والثقة بالنفس', 'يجرب', 'اعتراض على قضاء الله وقدره ويأس من رحمة الله', 75),
(135, 'من شروط صحة الصلاة', 'طاعة الركوع', 'العلم بكيفية الصلاة', 'استقبال أي جهة يشاء', 'الصلاة في المسجد', 'استقبال أي جهة يشاء', 76),
(136, 'الصوم', 'يحفظ للنوع الإنساني من الأعداء و الهجوم', 'حصن الإنسان و يقربه إلى الله', 'يجوع الإنسان و يقربه إلى الله', 'يجوع الإنسان ويحمل عليه أعباء كثيرة', 'حصن الإنسان و يقربه إلى الله', 76),
(137, 'الإسلام هو', 'دين الغلطة و الجفاء', 'دين المحبة والإخاء والسلام', 'دين اثارة الفتنة', 'دين العداوة', 'دين المحبة والإخاء والسلام', 76),
(138, 'تأمر الآية (وإذا حكمتم بين الناس أن تحكموا بالعدل ) بالعدل الشامل للناس على  اختلاف أجناسهم', 'لأن هذا المبدأ مطلوب في العالم الآن ', 'لأن هذا المبدأ موجود في القانون الدولي ', 'لأن هذا المبدأ أساس الحكم في الإسلام ', 'لأن هذا المبدأ موجود في الدستور للأمة ', 'لأن هذا المبدأ أساس الحكم في الإسلام ', 77),
(139, 'يطلب الشرع من المؤمنين إذا تداينوا بدين إلي وقت معين أن', 'يدفعوا بسرعة ', 'يدفعوا مؤجلا', 'يكتبون في وثيقة', 'يعلمه الحاكم ', 'يكتبون في وثيقة', 77),
(140, 'دعا الإسلام بالأخذ بمبدأ الشورى لأنه', 'الطريق الصحيح لمعرفة الرأي الصائب', 'الطريق الصحيح لمعرفة أصحاب العقول الراجحة', 'الطريق الصحيح لتحقيق المساواة بين الناس ', 'غيرها', 'الطريق الصحيح لمعرفة الرأي الصائب', 77),
(141, 'بعث الله رسول محمد صلى الله عليه وسلم', 'هاديا للبشرية و معلما لها', 'لعنة العرب وتحريرهم من الروم والفرس', 'لاستبعاد الناس وإكراههم  علي دين ', 'غيرها', 'هاديا للبشرية و معلما لها', 77),
(142, 'حرم الإسلام النفاق لأنه', 'دليل على ضعف النفس وخبث الكورة', 'يؤدي إلي تطور الإنسان وتقدمه', 'كان عادة منتشرة في مكة قبل الهجرة', 'لأنه مصر للصحة ', 'دليل على ضعف النفس وخبث الكورة', 77),
(143, 'التوكل بمعناه الصحيح', 'تفويض الأمر إلى الله بعد السعي والأخذ بالأسباب', 'الاعتماد على الأسباب وحدها', 'الثقة بالله و ترك السعي', 'الثقة بالنفس', 'تفويض الأمر إلى الله بعد السعي والأخذ بالأسباب', 77),
(144, 'الإسلام دين قائم على ', 'القوة', 'الاستسلام', 'الاستغلال', 'الجبروت', 'القوة', 77),
(145, 'الطريق إلى معرفة الرأي المصائب', 'تتناول أطراف الحديث ', 'الشوري', 'فرض الرأي على الآخرين', 'النميمة', 'الشوري', 77),
(146, 'إذا باع الرجل لآخر ١٠ كيلو من الأرز منه في الحال فهي ', 'ربا النسيئة', 'ربا الفضل', 'معاملة جائزة', 'ربا مُاجل', 'ربا الفضل', 77),
(147, 'إن من اعتقد غير النبي صلى الله عليه وسلم أكمل وأحسن من هديه حكمه', 'عاص', 'كافر', 'جاهل', 'فاسق', 'كافر', 78),
(148, 'من نواقض الإسلام', 'الخروج على طاعة الحاكم المسلم', 'الاستهزاء بالله ورسوله', 'الوشاية بين الناس', 'مدح الله و رسول', 'الاستهزاء بالله ورسوله', 78),
(149, 'من شروط لا اله الا الله', 'العلم بمعناها نفيا وإثباتا', 'الإكثار من قولها', 'أداء الصلوات في وقتها', 'الصوم', 'العلم بمعناها نفيا وإثباتا', 78),
(150, 'which of the following techniques could be used to separate the dyes in ink', 'chromatography', 'crystallization', 'distillation', 'filtration', 'chromatography', 79),
(151, 'what stage occur in distillation', 'condensation then evaporation', 'condensation then filtration', 'evaporation then condensation ', 'filtration then condensation ', 'evaporation then condensation ', 79),
(152, 'all of the following are characteristics properties of gases except', 'they can expand without limit', 'they can diffuse easily', 'they can easily compressed', 'they have high densities', 'they have high densities', 79),
(153, 'which formula represented a mixture', 'C₆H₁₂O₆(s)', 'C₆H₁₂O₆', 'LiCl(aq)', 'LiCl(s)', 'LiCl(aq)', 79),
(154, 'A drop of colored ink was added to water. Which process caused the color to spread', 'diffusion', 'melting', 'evaporation', 'condensation', 'diffusion', 79),
(155, 'which of the following processes can be used to decide whether chlorophyll is a single colour or mixture?', 'chromatography', 'distillation', 'filtration', 'crystallization', 'chromatography', 79),
(156, 'the process of sublimation, the substance is transformed directly', 'from the solid to liquid state', 'from liquid state to vapor state', 'from liquid state to solid state', 'from liquid state to gaseous state', 'from liquid state to gaseous state', 80),
(157, 'which of the following is correct symbol for the element silicon', 'Si', 'sI', 'is', 'SL', 'Si', 80),
(158, 'the most common isotope of aluminum is 27Al. how many electrons does an atom is isotope contain', '13', '14', '27', '40', '13', 80),
(159, 'In the periodic table, elements are arranged in order of increasing', 'atomic number', 'number of valency electron', 'atomic mass', 'electronegativity', 'atomic number', 80),
(160, 'which of the following elements has the lowest first ionization energy', 'Li', 'Mg', 'Na', 'Al', 'Na', 80),
(161, 'chlorine is found in group vii of the periodic table. the group is known as the', 'halogens', 'alkali metals', 'transitional metals', 'nobel gases', 'halogens', 80),
(162, 'which of the following is the correct atomic symbol for the element of potassium', 'k', 'Po', 'K', 'PO', 'K', 80),
(163, 'which property increases with increasing atomic number in alkali metals and halogens', 'ionization energy', 'electronegativity', 'melting point', 'atomic radii', 'atomic radii', 80),
(164, 'which of the following is an alkaline earth metal', 'sodium', 'calcium', 'zinc', 'aluminum', 'calcium', 80),
(165, 'an atom consist of ', 'protons and electrons ONLY', 'protons, neutrons and electrons', 'protons and neutrons ONLY', 'protons ONLY', 'protons, neutrons and electrons', 80),
(166, 'which substance does not have the correct formula', 'Iron(II) sulpahte Fe2(SO4)3', 'Iron(I) oxide Fe2O', 'copper(I) sulpahte Cu2SO4', 'copper(II) sulpahte Cu(NO3)2', 'Iron(I) oxide Fe2O', 81),
(167, 'which compound contains both covalent and ionic bonds', 'sodium carbonate Na2CO3', 'magnesium bromide MgBr2', 'dichloroethane CH2Cl2', 'Ethanoic acid CH3COOH', 'magnesium bromide MgBr2', 81),
(168, 'which pair of elements is most likely to form convalent bonds', 'Li and Cl', 'P and O', 'Ca and S', 'Zn and Br', 'Li and Cl', 81),
(169, 'which of the following molecules is iconic', 'C3H8', 'HBr', 'NaNO3', 'SiO3', 'NaNO3', 81),
(170, 'what type of bonds occurs when there is sharing of a pair of electrons', 'inconic bond', 'metallic bond', 'hydrogen bond', 'covalent bond', 'covalent bond', 81),
(171, 'which of the following statement is not true for both dilute hydrochloric acid and dilute sulphuric acid', 'both react with magnesium', 'both have PH of less than 7', 'both conduct electricity', 'both have a concentration of H+ ions in solution equal to the concentration of OH- ions solution', 'both have a concentration of H+ ions in solution equal to the concentration of OH- ions solution', 82),
(172, 'which of the following is property of all acids?', 'turns red litmus blue', 'reacts with a salt to form a base', 'reacts with an ammonium salt to produce ammonia gas', 'reacts wit a carbonates to produce to produce carbon dioxide', 'reacts wit a carbonates to produce to produce carbon dioxide', 82),
(173, 'which of the following is  not property of a base', 'soapy to touch', 'their solution turn litmus red', 'they have a PH greater than 7', 'they react with acids to form salt and water', 'their solution turn litmus red', 82),
(174, 'the PH of a weak alkali is between', '0 and 4', '7 and 10', '4 and 7', '11 and 14', '7 and 10', 82),
(175, 'an acid reacts with alkali to give ', 'hydrogen and water', 'hydrogen and salt', 'salt only', 'salt and water', 'hydrogen and water', 82),
(176, 'hydrogen gas is evolved when an acid reacts with', 'another acid', 'an alkali', 'non metal ', 'a metal', 'a metal', 82),
(177, 'what are the products of the following reaction?                                                                                      NaOH(aq) + HNO3(aq) -> NaNo3 + H2O', 'salt and water', 'hydrogen and salt', 'water only', 'hydrogen, water and slat', 'salt and water', 82),
(178, 'which of the following increases when hydrochloric acid is diluted with water', 'rate and reaction with magnesium', 'concentration of H+ ions', 'electrical conductivity', 'PH', 'concentration of H+ ions', 82),
(179, 'neutral solutions have a PH of', '2', '7', '0', '14', '7', 82),
(180, 'a solution of PH 8 is ', 'slightly acid', 'slightly acidic', 'strongly basic', 'strongly acidic', 'strongly basic', 82),
(181, 'which of the following molecules are produced when ethene (C2H4) is hydrated with concentrated sulphuric acid', 'C2H6', 'C2H5OH', 'CH4', 'CO2', 'C2H5OH', 83),
(182, 'which of the following compounds in an ester', 'CH3COOH', 'C2H5CH3', 'CH3OC2H5', 'HCOOCH3', 'HCOOCH3', 83),
(183, 'how many different isomers of pentane exist', '1', '2', '3', '4', '3', 83),
(184, 'organic molecules with the same molecular formula but different structural formulas are called', 'allotropes', 'isomers', 'isotopes', 'polymers', 'isomers', 83),
(185, 'which one of the following is not a hydrocarbon', 'methane', 'ethane', 'ethanol', 'ethyl', 'ethanol', 83),
(186, 'hydrogen carbon compounds burn in oxygen to give', 'water and carbon dioxide', 'water only', 'hydrogen and carbon dioxide', 'hydrogen only', 'water and carbon dioxide', 83),
(187, 'which one of the following is a secondary alcohol', '3-3-Dimethyl butanol', 'butanol', '2-Methylpropan-2-ol', 'pentan-2-ol', 'pentan-2-ol', 83),
(188, 'which of the following is NOT a natural polymer', 'protein', 'celloluse', 'rubber', 'nylon', 'nylon', 83),
(189, 'methane (CH4) gas diffuse through air because the molecules are', 'moving randomly', 'dissolving quickly', 'travelling slowly', 'expanding steadily', 'moving randomly', 83),
(190, 'the number of isomers having the molecular formula', '1', '2', '3', '4', '2', 83),
(191, 'an iconic bond is always formed with some covalent character, when', 'the electrons are not equally shared', 'there is a degree of electron transfer', 'the electron transfer is complete', 'there is a degree of electron sharing', 'the electrons are not equally shared', 81),
(192, 'what is the total numbers of electrons shared in a double covalent bond', '1', '2', '3', '4', '4', 81),
(193, 'which of the following possesses a polar covalent bond', 'NaCl', 'CH4', 'O2', 'HCl', 'HCl', 81),
(194, 'hydrogen bond is a type of ', 'strong covalent bond', 'weak iconic bond', 'strong intermolecular force', 'weak intermolecular force', 'weak intermolecular force', 81),
(195, 'which of the following properties is NOT common to both diamond and graphite ', 'the are allotropes of carbon', 'they bond covalent', 'they are good conductors of electricity', 'they do not react with strong acids', 'they are good conductors of electricity', 81),
(208, 'Which of the following is measured in Newton', 'density', 'mass', 'volume', 'weight', 'weight', 110),
(209, 'A metal of 360kg is 20cm long, 40cm wide and 30cm thick', '30g/cm³ ', '20g/cm³ ', '5g/cm³ ', '15g/cm³ ', '20g/cm³ ', 110),
(210, '0.2m is equal to ', '2 cm', '20 cm', '40 cm', '20 mm', '20 cm', 110),
(211, 'an object sinks in a liquid if it has', 'a large mass', 'less density than the liquid', 'greater density than the liquid', 'smaller volume density than the liquid', 'greater density than the liquid', 110),
(212, 'when using a measuring a cylinder one precaution to take is to', 'check for zero error', 'look at the meniscus from below the level of the water surface', 'obtain more readings by looking for more than one direction', 'position the eye in the line', 'position the eye in the line', 110),
(213, 'the umber of grams in 0.002kg are', '20 g', '200 g', '2 g', '2000 g', '2 G', 110),
(214, 'the SI Unit of length is ', 'Mm', 'Km', 'M', 'Cm', 'M', 110),
(215, 'the mass of the body is', 'the amount in matter in the body', 'the volume the body occupied', 'the product of its volume and density', 'its weight at sea level', 'the product of its volume and density', 110),
(216, '1Km/h =___m/s', '5/18', '18/5', '50/3', '3/50', '5/18', 110),
(217, 'which of the following is a vector quantity', 'distance', 'energy', 'speed', 'velocity', 'velocity', 110),
(218, 'the lowest point of the kelvin scale is known as ', 'absolute zero', 'freezing point', 'the ice point', 'the boiling point', 'absolute zero', 111),
(219, 'which is the best conductor of heat', 'aluminum ', 'copper', 'iron', 'brass', 'copper', 111),
(220, 'absolute zero temperature is same as ', '-273c', '273c', '373c', '173c', '-273c', 111),
(221, 'the heating stove is next to a wall in a closed room. The whole room is eventually heated', 'by conduction', 'by radiation only', 'by convection ', 'by evaporation', 'by convection ', 111),
(222, 'in the vacuum flask, the vacuum prevents heat transfer by', 'radiation only', 'conduction only', 'convection only', 'convection and conduction', 'convection and conduction', 111),
(223, 'a clinical thermometer has a narrow capillary tube so that it ', 'is quick to respond to temperature changes', 'can record the maximum temperature', 'shows a large change for a given temperature rise', 'can measure a range of temperature', 'is quick to respond to temperature changes', 111),
(225, 'absolute zero (0 K) is the temperature ', 'that pure ice melts', 'pure water evaporates', 'particles of matter stop moving', 'steam condenses', 'particles of matter stop moving', 111),
(226, 'a vacuum flask has double walls of glass or steel with a vacuum between them. which kinds of heat transfer are reduced by the vacuum', 'radiation and convection', 'conduction and convection', 'conduction and radiation', 'conduction , convection and radiation', 'conduction and convection', 111),
(227, 'normally healthy body temperature is', '27c', '98.4c', '37c', '68c', '37c', 111),
(228, 'the inner surface of vacuum flask is silvered to make it a  ', 'bad absorber and bad conductor of heat', 'bad absorber and good radiator heat', 'bad absorber and bad radiator of radiant heat', 'good absorber and bad radiator of heat', 'bad absorber and bad radiator of radiant heat', 111),
(229, 'the temperature of a gas increases, and its volume is constant', 'increase', 'decrease', 'remain the same', 'accelerate', 'increase', 112),
(230, 'when the sun shines on sand and water, the sand heats up quickly, than the water this is because the sand has lower', 'specific heat', 'latent heat', 'temperature ', 'expansion', 'specific heat', 112),
(231, 'the quantity of heat energy that can raise the temperature of 3kg of water from 10c to 50c is ', '3x10x50KJ', '3x40KJ', '3x50KJ', '504KJ', '504KJ', 112),
(232, 'evaporation and melting is called', 'change of heat', 'change of state', 'change of temperature', 'specific heat', 'change of state', 112),
(234, 'cooling always accompanies evaporation because ', 'the air molecules cool the liquid surface', 'the more energetic molecules leave liquid', 'there ae fewer liquid molecules left in the liquid ', 'the escaped molecules return to the liquid', 'the more energetic molecules leave liquid', 112),
(235, 'ice cream melts its molecules ', 'absorb heat energy and move further apart', 'absorb heat energy and move closer apart', 'release heat energy and move further apart', 'release heat energy and move closer apart', 'absorb heat energy and move further apart', 112),
(236, 'ice is used for cooling drinks.this is because ice', 'has white color', 'is asolid', 'has less density than water ', 'takes latent heat from the drink', 'takes latent heat from the drink', 112),
(237, 'water is used to cool machines. this is because water ', 'is easily available', 'is a liquid', 'has high specific heat capacity', 'has unusual expansion', 'has high specific heat capacity', 112),
(238, 'ice place in water cods down the water because ice', 'floats in water', 'is a solid ', 'has less density than water', 'takes in latent heat from the water', 'takes in latent heat from the water', 112),
(239, 'specific latent heat is defined as', 'heat required to change water to steam ', 'heat required to melt ice', 'heat exchange when the state of unit mass of substance changes without a temperature change', 'heat taken in or given out when the state of a substance changes', 'heat exchange when the state of unit mass of substance changes without a temperature change', 112),
(240, 'correction of short sight of the eye is by', 'a converging lens placed in front of the eye', 'a diverging lens placed in front of the eye', 'moving away from near objects', 'using binoculars', 'a diverging lens placed in front of the eye', 113),
(241, 'a image formed on the film of simple camera is', 'real,inverted and diminished', 'virtual,upright and diminished', 'virtual,upright and magnified', 'real,inverted and magnified', 'real,inverted and diminished', 113),
(242, 'a mirage is formed due to ', 'refraction', 'dispersion', 'reflection', 'scattering', 'refraction', 113),
(243, 'the formation of shadow is due to light travelling', 'fast', 'in straight line', 'through non-blocking objects', 'through vacuum', 'in straight line', 113),
(244, 'if ray of light strikes a plane mirror  normally the angel of incidence is', '60', '30', '0', '90', '0', 113),
(245, 'if we paint a disc RED, GREEN & BLUE equally and then rotate it very fast what color will you see on the disc', 'brown', 'blue', 'black', 'white', 'white', 113),
(246, 'we see images in a plane mirror because the light rays are', 'diffracted', 'reflected', 'refracted', 'dispersed', 'reflected', 113),
(247, 'which of the following is non-luminous object', 'the sun', 'a candle', 'the moon', 'a lamp', 'the moon', 113),
(248, 'a stick looks bent in water because', 'the light is refracted at the surface of water', 'the stick is really bent', 'it is an optical illusion caused by the moving water', 'it is a mirage', 'the light is refracted at the surface of water', 113),
(249, 'which of the following colors is a secondary color', 'red', 'blue', 'green', 'yellow', 'yellow', 113),
(250, 'a train of 10,000kg mass is hauled by an engine of 40,000N.what is the acceleration of the train', '4m/s2', '2m/s2', '0.4m/s2', '0.5m/s2', '0.4m/s2', 114),
(251, 'a net force of 10Newton acceleration an object at 5m/s2. what net force would be required to accelerate the same object at 1m/s2', '1N', '2N', '5N', '50N', '2N', 114),
(252, 'a product of two mass and velocity is called', 'acceleration', 'momentum arm', 'negative acceleration', 'momentum', 'momentum', 114),
(253, 'when a resultant force of 6N is applied to a mass of 3.0kg, the acceleration of the mass will be', '0.5m/s2', '2m/s2', '3m/s2', '18m/s2', '2m/s2', 114),
(254, 'you are sitting in a car, it stops immediately and you fall forward .this is due to your', 'weight', 'inertia', 'gravity', 'height', 'inertia', 114),
(255, 'which of the following contains one vector and one scaler quantity', 'power,speed', 'force, kinetic energy', 'momentum velocity', 'displacement, acceleration', 'momentum velocity', 114),
(256, 'in swimming water is pushed backwards and as a result the swimmer moves forwards. this is an example of newton\'s', 'first law of motion', 'second law of motion', 'third law of motion', 'law of inertia', 'third law of motion', 114),
(257, 'the quantity that tells how hard acts is known as', 'momentum', 'impulse', 'moment', 'torque', 'impulse', 114),
(258, 'when the force acting on a moving body are balance the net force becomes zero. as a result the body will', 'move with increasing velocity', 'move with decreasing velocity', 'move with constant(uniform) velocity', 'stop moving', 'move with constant(uniform) velocity', 114),
(259, 'a force of 17N acts on a block of mass 4kg. the force of friction opposing the motion is 5N. the acceleration of the block is', '2m/s2', '3m/s2', '4m/s2', '12m/s2', '3m/s2', 114);

-- --------------------------------------------------------

--
-- Table structure for table `tblquestions`
--

CREATE TABLE `tblquestions` (
  `id` int(11) NOT NULL,
  `quesion` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_ans_details`
--

CREATE TABLE `user_ans_details` (
  `username` varchar(255) NOT NULL,
  `question_id` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_ans_details`
--

INSERT INTO `user_ans_details` (`username`, `question_id`, `answer`, `category_id`, `session`, `date`) VALUES
('clover', '136', 'يحفظ للنوع الإنساني من الأعداء و الهجوم', '76', '6223', '2021-07-31 12:07:12'),
('clover', '135', 'العلم بكيفية الصلاة', '76', '6223', '2021-07-31 12:07:12'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '6223', '2021-07-31 12:07:12'),
('clover', 'submitQuiz', 'submit Quiz', '76', '6223', '2021-07-31 12:07:12'),
('clover', '136', 'يحفظ للنوع الإنساني من الأعداء و الهجوم', '76', '2076', '2021-07-31 12:08:38'),
('clover', '137', 'no_answer', '76', '2076', '2021-07-31 12:08:38'),
('clover', '135', 'no_answer', '76', '2076', '2021-07-31 12:08:39'),
('clover', 'submitQuiz', 'submit Quiz', '76', '2076', '2021-07-31 12:08:39'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '1975', '2021-07-31 12:09:05'),
('clover', '135', 'العلم بكيفية الصلاة', '76', '1975', '2021-07-31 12:09:05'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '1975', '2021-07-31 12:09:05'),
('clover', 'submitQuiz', 'submit Quiz', '76', '1975', '2021-07-31 12:09:05'),
('clover', '135', 'العلم بكيفية الصلاة', '76', '9919', '2021-07-31 12:09:57'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '9919', '2021-07-31 12:09:57'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '9919', '2021-07-31 12:09:57'),
('clover', 'submitQuiz', 'submit Quiz', '76', '9919', '2021-07-31 12:09:57'),
('clover', '135', 'استقبال أي جهة يشاء', '76', '963', '2021-07-31 12:12:06'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '963', '2021-07-31 12:12:06'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '963', '2021-07-31 12:12:07'),
('clover', 'submitQuiz', 'Submit', '76', '963', '2021-07-31 12:12:07'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '9659', '2021-07-31 12:16:32'),
('clover', '135', 'استقبال أي جهة يشاء', '76', '9659', '2021-07-31 12:16:32'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '9659', '2021-07-31 12:16:32'),
('clover', '162', 'PO', '80', '9840', '2021-07-31 12:35:58'),
('clover', '163', 'no_answer', '80', '9840', '2021-07-31 12:35:58'),
('clover', '158', 'no_answer', '80', '9840', '2021-07-31 12:35:58'),
('clover', '156', 'from the solid to liquid state', '80', '9840', '2021-07-31 12:35:59'),
('clover', '161', 'halogens', '80', '9840', '2021-07-31 12:35:59'),
('clover', '159', 'no_answer', '80', '9840', '2021-07-31 12:35:59'),
('clover', '164', 'sodium', '80', '9840', '2021-07-31 12:35:59'),
('clover', '165', 'protons, neutrons and electrons', '80', '9840', '2021-07-31 12:35:59'),
('clover', '157', 'Si', '80', '9840', '2021-07-31 12:35:59'),
('clover', '160', 'Mg', '80', '9840', '2021-07-31 12:35:59'),
('clover', '135', 'استقبال أي جهة يشاء', '76', '9308', '2021-07-31 14:31:11'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '9308', '2021-07-31 14:31:11'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '9308', '2021-07-31 14:31:11'),
('clover', '180', 'slightly acid', '82', '3205', '2021-07-31 15:22:34'),
('clover', '179', 'no_answer', '82', '3205', '2021-07-31 15:22:34'),
('clover', '174', 'no_answer', '82', '3205', '2021-07-31 15:22:35'),
('clover', '178', 'no_answer', '82', '3205', '2021-07-31 15:22:35'),
('clover', '177', 'no_answer', '82', '3205', '2021-07-31 15:22:35'),
('clover', '176', 'no_answer', '82', '3205', '2021-07-31 15:22:35'),
('clover', '175', 'no_answer', '82', '3205', '2021-07-31 15:22:35'),
('clover', '171', 'no_answer', '82', '3205', '2021-07-31 15:22:35'),
('clover', '172', 'no_answer', '82', '3205', '2021-07-31 15:22:35'),
('clover', '173', 'no_answer', '82', '3205', '2021-07-31 15:22:35'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '4705', '2021-07-31 15:26:22'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '4705', '2021-07-31 15:26:22'),
('clover', '135', 'استقبال أي جهة يشاء', '76', '4705', '2021-07-31 15:26:22'),
('clover', '135', 'العلم بكيفية الصلاة', '76', '6773', '2021-07-31 15:27:09'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '6773', '2021-07-31 15:27:09'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '6773', '2021-07-31 15:27:09'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '9560', '2021-07-31 15:32:21'),
('clover', '135', 'استقبال أي جهة يشاء', '76', '9560', '2021-07-31 15:32:21'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '9560', '2021-07-31 15:32:21'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '975', '2021-07-31 15:34:41'),
('clover', '135', 'استقبال أي جهة يشاء', '76', '975', '2021-07-31 15:34:41'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '975', '2021-07-31 15:34:41'),
('clover', '147', 'كافر', '78', '8947', '2021-07-31 16:41:46'),
('clover', '149', 'العلم بمعناها نفيا وإثباتا', '78', '8947', '2021-07-31 16:41:46'),
('clover', '148', 'الاستهزاء بالله ورسوله', '78', '8947', '2021-07-31 16:41:47'),
('clover', '227', '37c', '111', '8171', '2021-07-31 16:42:33'),
('clover', '222', 'no_answer', '111', '8171', '2021-07-31 16:42:33'),
('clover', '220', 'no_answer', '111', '8171', '2021-07-31 16:42:34'),
('clover', '228', 'no_answer', '111', '8171', '2021-07-31 16:42:34'),
('clover', '218', 'no_answer', '111', '8171', '2021-07-31 16:42:34'),
('clover', '221', 'no_answer', '111', '8171', '2021-07-31 16:42:34'),
('clover', '225', 'no_answer', '111', '8171', '2021-07-31 16:42:34'),
('clover', '223', 'no_answer', '111', '8171', '2021-07-31 16:42:34'),
('clover', '226', 'no_answer', '111', '8171', '2021-07-31 16:42:34'),
('clover', '219', 'no_answer', '111', '8171', '2021-07-31 16:42:34'),
('clover', '174', 'no_answer', '82', '3080', '2021-07-31 16:46:20'),
('clover', '171', 'no_answer', '82', '3080', '2021-07-31 16:46:20'),
('clover', '176', 'no_answer', '82', '3080', '2021-07-31 16:46:20'),
('clover', '177', 'no_answer', '82', '3080', '2021-07-31 16:46:20'),
('clover', '172', 'no_answer', '82', '3080', '2021-07-31 16:46:21'),
('clover', '175', 'no_answer', '82', '3080', '2021-07-31 16:46:21'),
('clover', '179', 'no_answer', '82', '3080', '2021-07-31 16:46:21'),
('clover', '178', 'no_answer', '82', '3080', '2021-07-31 16:46:21'),
('clover', '180', 'strongly basic', '82', '3080', '2021-07-31 16:46:21'),
('clover', '173', 'they react with acids to form salt and water', '82', '3080', '2021-07-31 16:46:21'),
('clover', '175', 'not answered', '82', '7594', '2021-07-31 16:56:39'),
('clover', '174', 'not answered', '82', '7594', '2021-07-31 16:56:39'),
('clover', '179', 'not answered', '82', '7594', '2021-07-31 16:56:39'),
('clover', '173', 'not answered', '82', '7594', '2021-07-31 16:56:39'),
('clover', '171', 'not answered', '82', '7594', '2021-07-31 16:56:39'),
('clover', '172', 'not answered', '82', '7594', '2021-07-31 16:56:39'),
('clover', '180', 'not answered', '82', '7594', '2021-07-31 16:56:40'),
('clover', '178', 'not answered', '82', '7594', '2021-07-31 16:56:40'),
('clover', '176', 'not answered', '82', '7594', '2021-07-31 16:56:40'),
('clover', '177', 'water only', '82', '7594', '2021-07-31 16:56:40'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '7297', '2021-07-31 16:57:20'),
('clover', '135', 'استقبال أي جهة يشاء', '76', '7297', '2021-07-31 16:57:20'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '7297', '2021-07-31 16:57:21'),
('clover', '168', 'Li and Cl', '81', '554', '2021-07-31 16:57:53'),
('clover', '191', 'not answered', '81', '554', '2021-07-31 16:57:53'),
('clover', '166', 'not answered', '81', '554', '2021-07-31 16:57:53'),
('clover', '192', 'not answered', '81', '554', '2021-07-31 16:57:53'),
('clover', '170', 'not answered', '81', '554', '2021-07-31 16:57:53'),
('clover', '194', 'not answered', '81', '554', '2021-07-31 16:57:53'),
('clover', '195', 'not answered', '81', '554', '2021-07-31 16:57:53'),
('clover', '193', 'not answered', '81', '554', '2021-07-31 16:57:53'),
('clover', '167', 'not answered', '81', '554', '2021-07-31 16:57:53'),
('clover', '169', 'not answered', '81', '554', '2021-07-31 16:57:53'),
('clover', '221', 'not_answered', '111', '1704', '2021-07-31 16:58:17'),
('clover', '222', 'not_answered', '111', '1704', '2021-07-31 16:58:17'),
('clover', '225', 'not_answered', '111', '1704', '2021-07-31 16:58:17'),
('clover', '223', 'not_answered', '111', '1704', '2021-07-31 16:58:17'),
('clover', '227', 'not_answered', '111', '1704', '2021-07-31 16:58:17'),
('clover', '226', 'not_answered', '111', '1704', '2021-07-31 16:58:17'),
('clover', '220', 'not_answered', '111', '1704', '2021-07-31 16:58:17'),
('clover', '218', 'not_answered', '111', '1704', '2021-07-31 16:58:17'),
('clover', '228', 'not_answered', '111', '1704', '2021-07-31 16:58:17'),
('clover', '219', 'not_answered', '111', '1704', '2021-07-31 16:58:17'),
('clover', '135', 'not_answered', '76', '2636', '2021-07-31 17:00:56'),
('clover', '137', 'not_answered', '76', '2636', '2021-07-31 17:00:56'),
('clover', '136', 'not_answered', '76', '2636', '2021-07-31 17:00:56'),
('clover', '135', 'not_answered', '76', '6294', '2021-07-31 17:01:51'),
('clover', '137', 'not_answered', '76', '6294', '2021-07-31 17:01:51'),
('clover', '136', 'not_answered', '76', '6294', '2021-07-31 17:01:51'),
('clover', '148', 'no_answer', '78', '341', '2021-07-31 17:01:59'),
('clover', '149', 'no_answer', '78', '341', '2021-07-31 17:01:59'),
('clover', '147', 'no_answer', '78', '341', '2021-07-31 17:01:59'),
('clover', '136', 'no_answer', '76', '8142', '2021-07-31 17:03:39'),
('clover', '137', 'no_answer', '76', '8142', '2021-07-31 17:03:39'),
('clover', '135', 'no_answer', '76', '8142', '2021-07-31 17:03:39'),
('clover', '258', 'move with constant(uniform) velocity', '114', '2242', '2021-07-31 17:11:39'),
('clover', '255', 'momentum velocity', '114', '2242', '2021-07-31 17:11:39'),
('clover', '252', 'momentum', '114', '2242', '2021-07-31 17:11:40'),
('clover', '256', 'third law of motion', '114', '2242', '2021-07-31 17:11:40'),
('clover', '259', '3m/s2', '114', '2242', '2021-07-31 17:11:40'),
('clover', '254', 'inertia', '114', '2242', '2021-07-31 17:11:40'),
('clover', '251', '2N', '114', '2242', '2021-07-31 17:11:40'),
('clover', '250', '0.4m/s2', '114', '2242', '2021-07-31 17:11:40'),
('clover', '253', '2m/s2', '114', '2242', '2021-07-31 17:11:40'),
('clover', '257', 'momentum', '114', '2242', '2021-07-31 17:11:40'),
('username', '186', 'hydrogen and carbon dioxide', '83', '627', '2021-08-01 03:48:02'),
('username', '183', 'no_answer', '83', '627', '2021-08-01 03:48:02'),
('username', '188', 'no_answer', '83', '627', '2021-08-01 03:48:02'),
('username', '185', 'no_answer', '83', '627', '2021-08-01 03:48:02'),
('username', '189', 'no_answer', '83', '627', '2021-08-01 03:48:02'),
('username', '181', 'no_answer', '83', '627', '2021-08-01 03:48:03'),
('username', '190', 'no_answer', '83', '627', '2021-08-01 03:48:04'),
('username', '187', 'no_answer', '83', '627', '2021-08-01 03:48:04'),
('username', '184', 'isotopes', '83', '627', '2021-08-01 03:48:04'),
('username', '182', 'no_answer', '83', '627', '2021-08-01 03:48:05'),
('clover', '137', 'دين المحبة والإخاء والسلام', '76', '5941', '2021-08-01 03:53:12'),
('clover', '136', 'حصن الإنسان و يقربه إلى الله', '76', '5941', '2021-08-01 03:53:12'),
('clover', '135', 'طاعة الركوع', '76', '5941', '2021-08-01 03:53:13'),
('username', '137', 'دين المحبة والإخاء والسلام', '76', '9232', '2021-08-01 04:03:01'),
('username', '136', 'حصن الإنسان و يقربه إلى الله', '76', '9232', '2021-08-01 04:03:01'),
('username', '135', 'استقبال أي جهة يشاء', '76', '9232', '2021-08-01 04:03:01'),
('username', '255', 'momentum velocity', '114', '8848', '2021-08-01 05:20:23'),
('username', '252', 'momentum', '114', '8848', '2021-08-01 05:20:23'),
('username', '253', '2m/s2', '114', '8848', '2021-08-01 05:20:23'),
('username', '259', '4m/s2', '114', '8848', '2021-08-01 05:20:23'),
('username', '257', 'impulse', '114', '8848', '2021-08-01 05:20:23'),
('username', '256', 'third law of motion', '114', '8848', '2021-08-01 05:20:24'),
('username', '254', 'inertia', '114', '8848', '2021-08-01 05:20:24'),
('username', '251', '5N', '114', '8848', '2021-08-01 05:20:24'),
('username', '258', 'move with constant(uniform) velocity', '114', '8848', '2021-08-01 05:20:24'),
('username', '250', '2m/s2', '114', '8848', '2021-08-01 05:20:24'),
('username', '250', 'no_answer', '114', '5632', '2021-08-01 12:52:15'),
('username', '256', 'no_answer', '114', '5632', '2021-08-01 12:52:15'),
('username', '257', 'no_answer', '114', '5632', '2021-08-01 12:52:15'),
('username', '258', 'no_answer', '114', '5632', '2021-08-01 12:52:15'),
('username', '251', 'no_answer', '114', '5632', '2021-08-01 12:52:15'),
('username', '259', 'no_answer', '114', '5632', '2021-08-01 12:52:15'),
('username', '253', 'no_answer', '114', '5632', '2021-08-01 12:52:15'),
('username', '254', 'no_answer', '114', '5632', '2021-08-01 12:52:15'),
('username', '252', 'no_answer', '114', '5632', '2021-08-01 12:52:15'),
('username', '255', 'no_answer', '114', '5632', '2021-08-01 12:52:15'),
('username', '121', 'ربيع الثاني سنة عشرين من الهجرة', '74', '2337', '2021-08-01 12:53:10'),
('username', '118', 'no_answer', '74', '2337', '2021-08-01 12:53:10'),
('username', '117', 'أربعة و خمسين', '74', '2337', '2021-08-01 12:53:10'),
('username', '124', 'سنة ٢ من الهجرة ', '74', '2337', '2021-08-01 12:53:10'),
('username', '116', 'no_answer', '74', '2337', '2021-08-01 12:53:10'),
('username', '126', 'no_answer', '74', '2337', '2021-08-01 12:53:10'),
('username', '125', 'سنتين', '74', '2337', '2021-08-01 12:53:10'),
('username', '119', 'ألفين', '74', '2337', '2021-08-01 12:53:10'),
('username', '120', 'هرقل', '74', '2337', '2021-08-01 12:53:10'),
('username', '122', '١٥ من الهجرة  ', '74', '2337', '2021-08-01 12:53:10'),
('username', '127', 'حاكم مصر', '74', '2337', '2021-08-01 12:53:10'),
('username', '123', '٢٣ عاما', '74', '2337', '2021-08-01 12:53:10'),
('clover', '185', 'ethane', '83', '3928', '2021-08-02 17:04:30'),
('clover', '182', 'no_answer', '83', '3928', '2021-08-02 17:04:30'),
('clover', '181', 'no_answer', '83', '3928', '2021-08-02 17:04:30'),
('clover', '188', 'no_answer', '83', '3928', '2021-08-02 17:04:30'),
('clover', '183', 'no_answer', '83', '3928', '2021-08-02 17:04:30'),
('clover', '184', 'no_answer', '83', '3928', '2021-08-02 17:04:30'),
('clover', '190', 'no_answer', '83', '3928', '2021-08-02 17:04:30'),
('clover', '186', 'no_answer', '83', '3928', '2021-08-02 17:04:30'),
('clover', '189', 'no_answer', '83', '3928', '2021-08-02 17:04:31'),
('clover', '187', 'no_answer', '83', '3928', '2021-08-02 17:04:31'),
('username', '246', 'dispersed', '113', '2573', '2021-08-02 17:08:23'),
('username', '245', 'black', '113', '2573', '2021-08-02 17:08:23'),
('username', '243', 'through non-blocking objects', '113', '2573', '2021-08-02 17:08:23'),
('username', '247', 'no_answer', '113', '2573', '2021-08-02 17:08:23'),
('username', '241', 'no_answer', '113', '2573', '2021-08-02 17:08:23'),
('username', '240', 'no_answer', '113', '2573', '2021-08-02 17:08:23'),
('username', '244', '30', '113', '2573', '2021-08-02 17:08:23'),
('username', '249', 'red', '113', '2573', '2021-08-02 17:08:23'),
('username', '242', 'scattering', '113', '2573', '2021-08-02 17:08:23'),
('username', '248', 'it is a mirage', '113', '2573', '2021-08-02 17:08:23'),
('yara00', '231', '3x50KJ', '112', '3678', '2021-08-05 14:11:00'),
('yara00', '230', 'specific heat', '112', '3678', '2021-08-05 14:11:00'),
('yara00', '232', 'change of heat', '112', '3678', '2021-08-05 14:11:00'),
('yara00', '236', 'takes latent heat from the drink', '112', '3678', '2021-08-05 14:11:00'),
('yara00', '235', 'absorb heat energy and move closer apart', '112', '3678', '2021-08-05 14:11:00'),
('yara00', '239', 'heat required to melt ice', '112', '3678', '2021-08-05 14:11:00'),
('yara00', '229', 'remain the same', '112', '3678', '2021-08-05 14:11:00'),
('yara00', '237', 'is a liquid', '112', '3678', '2021-08-05 14:11:00'),
('yara00', '238', 'floats in water', '112', '3678', '2021-08-05 14:11:00'),
('yara00', '234', 'the more energetic molecules leave liquid', '112', '3678', '2021-08-05 14:11:00'),
('yara00', '124', 'سنة ٢ من الهجرة ', '74', '328', '2021-08-05 18:58:39'),
('yara00', '121', 'ربيع الثاني سنة عشرين من الهجرة', '74', '328', '2021-08-05 18:58:39'),
('yara00', '117', 'اربعه واربعين', '74', '328', '2021-08-05 18:58:40'),
('yara00', '122', ' ١٣ من الهجرة ', '74', '328', '2021-08-05 18:58:40'),
('yara00', '123', '٢٣ عاما', '74', '328', '2021-08-05 18:58:40'),
('yara00', '119', 'ثلاث آلاف مقاتل', '74', '328', '2021-08-05 18:58:40'),
('yara00', '125', '٣ سنوات ', '74', '328', '2021-08-05 18:58:40'),
('yara00', '116', 'no_answer', '74', '328', '2021-08-05 18:58:40'),
('yara00', '127', 'حاكم العراق', '74', '328', '2021-08-05 18:58:40'),
('yara00', '126', 'no_answer', '74', '328', '2021-08-05 18:58:40'),
('yara00', '120', 'no_answer', '74', '328', '2021-08-05 18:58:40'),
('yara00', '118', 'no_answer', '74', '328', '2021-08-05 18:58:40'),
('username', '176', 'no_answer', '82', '8485', '2021-08-07 18:24:12'),
('username', '179', 'no_answer', '82', '8485', '2021-08-07 18:24:12'),
('username', '171', 'no_answer', '82', '8485', '2021-08-07 18:24:12'),
('username', '180', 'no_answer', '82', '8485', '2021-08-07 18:24:12'),
('username', '173', 'no_answer', '82', '8485', '2021-08-07 18:24:12'),
('username', '175', 'no_answer', '82', '8485', '2021-08-07 18:24:12'),
('username', '174', 'no_answer', '82', '8485', '2021-08-07 18:24:12'),
('username', '178', 'no_answer', '82', '8485', '2021-08-07 18:24:12'),
('username', '172', 'no_answer', '82', '8485', '2021-08-07 18:24:12'),
('username', '177', 'no_answer', '82', '8485', '2021-08-07 18:24:13'),
('username', '176', 'no_answer', '82', '6428', '2021-08-07 18:27:21'),
('username', '179', 'no_answer', '82', '6428', '2021-08-07 18:27:22'),
('username', '171', 'no_answer', '82', '6428', '2021-08-07 18:27:22'),
('username', '180', 'no_answer', '82', '6428', '2021-08-07 18:27:22'),
('username', '173', 'no_answer', '82', '6428', '2021-08-07 18:27:22'),
('username', '175', 'no_answer', '82', '6428', '2021-08-07 18:27:22'),
('username', '174', 'no_answer', '82', '6428', '2021-08-07 18:27:22'),
('username', '178', 'no_answer', '82', '6428', '2021-08-07 18:27:22'),
('username', '172', 'no_answer', '82', '6428', '2021-08-07 18:27:22'),
('username', '177', 'no_answer', '82', '6428', '2021-08-07 18:27:22'),
('username', '176', 'no_answer', '82', '7603', '2021-08-07 18:28:42'),
('username', '179', 'no_answer', '82', '7603', '2021-08-07 18:28:42'),
('username', '171', 'no_answer', '82', '7603', '2021-08-07 18:28:42'),
('username', '180', 'no_answer', '82', '7603', '2021-08-07 18:28:42'),
('username', '173', 'no_answer', '82', '7603', '2021-08-07 18:28:42'),
('username', '175', 'no_answer', '82', '7603', '2021-08-07 18:28:42'),
('username', '174', 'no_answer', '82', '7603', '2021-08-07 18:28:42'),
('username', '178', 'no_answer', '82', '7603', '2021-08-07 18:28:43'),
('username', '172', 'no_answer', '82', '7603', '2021-08-07 18:28:43'),
('username', '177', 'no_answer', '82', '7603', '2021-08-07 18:28:43'),
('username', '128', 'يدل على جبنه وضعف نفسه', '75', '1765', '2021-08-07 18:35:55'),
('username', '131', 'no_answer', '75', '1765', '2021-08-07 18:35:55'),
('username', '129', 'no_answer', '75', '1765', '2021-08-07 18:35:55'),
('username', '130', 'no_answer', '75', '1765', '2021-08-07 18:35:55'),
('username', '132', 'no_answer', '75', '1765', '2021-08-07 18:35:55'),
('username', '134', 'no_answer', '75', '1765', '2021-08-07 18:35:55'),
('username', '133', 'no_answer', '75', '1765', '2021-08-07 18:35:56'),
('username', '128', 'يدل على جبنه وضعف نفسه', '75', '3470', '2021-08-07 18:37:39'),
('username', '131', 'no_answer', '75', '3470', '2021-08-07 18:37:39'),
('username', '129', 'no_answer', '75', '3470', '2021-08-07 18:37:39'),
('username', '130', 'no_answer', '75', '3470', '2021-08-07 18:37:39'),
('username', '132', 'no_answer', '75', '3470', '2021-08-07 18:37:39'),
('username', '134', 'no_answer', '75', '3470', '2021-08-07 18:37:39'),
('username', '133', 'no_answer', '75', '3470', '2021-08-07 18:37:39'),
('username', '151', 'condensation then filtration', '79', '3991', '2021-08-07 18:44:18'),
('username', '150', 'no_answer', '79', '3991', '2021-08-07 18:44:18'),
('username', '153', 'no_answer', '79', '3991', '2021-08-07 18:44:18'),
('username', '154', 'no_answer', '79', '3991', '2021-08-07 18:44:18'),
('username', '152', 'no_answer', '79', '3991', '2021-08-07 18:44:18'),
('username', '155', 'no_answer', '79', '3991', '2021-08-07 18:44:18'),
('username', '151', 'condensation then filtration', '79', '3241', '2021-08-07 18:44:56'),
('username', '150', 'no_answer', '79', '3241', '2021-08-07 18:44:56'),
('username', '153', 'no_answer', '79', '3241', '2021-08-07 18:44:56'),
('username', '154', 'no_answer', '79', '3241', '2021-08-07 18:44:56'),
('username', '152', 'no_answer', '79', '3241', '2021-08-07 18:44:56'),
('username', '155', 'no_answer', '79', '3241', '2021-08-07 18:44:56'),
('username', '151', 'condensation then filtration', '79', '4860', '2021-08-07 18:45:29'),
('username', '150', 'no_answer', '79', '4860', '2021-08-07 18:45:29'),
('username', '153', 'no_answer', '79', '4860', '2021-08-07 18:45:29'),
('username', '154', 'no_answer', '79', '4860', '2021-08-07 18:45:29'),
('username', '152', 'no_answer', '79', '4860', '2021-08-07 18:45:29'),
('username', '155', 'no_answer', '79', '4860', '2021-08-07 18:45:29'),
('username', '151', 'condensation then filtration', '79', '8131', '2021-08-07 18:45:55'),
('username', '150', 'no_answer', '79', '8131', '2021-08-07 18:45:55'),
('username', '153', 'no_answer', '79', '8131', '2021-08-07 18:45:55'),
('username', '154', 'no_answer', '79', '8131', '2021-08-07 18:45:55'),
('username', '152', 'no_answer', '79', '8131', '2021-08-07 18:45:55'),
('username', '155', 'no_answer', '79', '8131', '2021-08-07 18:45:55'),
('username', '151', 'condensation then filtration', '79', '6344', '2021-08-07 18:46:17'),
('username', '150', 'no_answer', '79', '6344', '2021-08-07 18:46:17'),
('username', '153', 'no_answer', '79', '6344', '2021-08-07 18:46:17'),
('username', '154', 'no_answer', '79', '6344', '2021-08-07 18:46:17'),
('username', '152', 'no_answer', '79', '6344', '2021-08-07 18:46:17'),
('username', '155', 'no_answer', '79', '6344', '2021-08-07 18:46:17'),
('username', '151', 'condensation then filtration', '79', '7693', '2021-08-07 18:46:42'),
('username', '150', 'no_answer', '79', '7693', '2021-08-07 18:46:42'),
('username', '153', 'no_answer', '79', '7693', '2021-08-07 18:46:42'),
('username', '154', 'no_answer', '79', '7693', '2021-08-07 18:46:42'),
('username', '152', 'no_answer', '79', '7693', '2021-08-07 18:46:42'),
('username', '155', 'no_answer', '79', '7693', '2021-08-07 18:46:42'),
('clover', '187', 'no_answer', '83', '9117', '2021-08-07 18:53:23'),
('clover', '183', 'no_answer', '83', '9117', '2021-08-07 18:53:23'),
('clover', '185', 'no_answer', '83', '9117', '2021-08-07 18:53:23'),
('clover', '189', 'no_answer', '83', '9117', '2021-08-07 18:53:23'),
('clover', '181', 'no_answer', '83', '9117', '2021-08-07 18:53:23'),
('clover', '182', 'no_answer', '83', '9117', '2021-08-07 18:53:23'),
('clover', '188', 'no_answer', '83', '9117', '2021-08-07 18:53:23'),
('clover', '186', 'no_answer', '83', '9117', '2021-08-07 18:53:23'),
('clover', '190', 'no_answer', '83', '9117', '2021-08-07 18:53:23'),
('clover', '184', 'isomers', '83', '9117', '2021-08-07 18:53:24'),
('clover', '187', 'no_answer', '83', '9242', '2021-08-07 18:54:22'),
('clover', '183', 'no_answer', '83', '9242', '2021-08-07 18:54:22'),
('clover', '185', 'no_answer', '83', '9242', '2021-08-07 18:54:22'),
('clover', '189', 'no_answer', '83', '9242', '2021-08-07 18:54:22'),
('clover', '181', 'no_answer', '83', '9242', '2021-08-07 18:54:22'),
('clover', '182', 'no_answer', '83', '9242', '2021-08-07 18:54:22'),
('clover', '188', 'no_answer', '83', '9242', '2021-08-07 18:54:22'),
('clover', '186', 'no_answer', '83', '9242', '2021-08-07 18:54:22'),
('clover', '190', 'no_answer', '83', '9242', '2021-08-07 18:54:22'),
('clover', '184', 'isomers', '83', '9242', '2021-08-07 18:54:22'),
('clover', '194', 'strong covalent bond', '81', '6226', '2021-08-07 19:12:18'),
('clover', '166', 'no_answer', '81', '6226', '2021-08-07 19:12:18'),
('clover', '193', 'no_answer', '81', '6226', '2021-08-07 19:12:19'),
('clover', '170', 'no_answer', '81', '6226', '2021-08-07 19:12:19'),
('clover', '168', 'no_answer', '81', '6226', '2021-08-07 19:12:19'),
('clover', '169', 'no_answer', '81', '6226', '2021-08-07 19:12:19'),
('clover', '195', 'no_answer', '81', '6226', '2021-08-07 19:12:19'),
('clover', '192', 'no_answer', '81', '6226', '2021-08-07 19:12:19'),
('clover', '167', 'no_answer', '81', '6226', '2021-08-07 19:12:19'),
('clover', '191', 'no_answer', '81', '6226', '2021-08-07 19:12:19'),
('clover', '168', 'Li and Cl', '81', '5948', '2021-08-07 19:25:52'),
('clover', '195', 'no_answer', '81', '5948', '2021-08-07 19:25:52'),
('clover', '166', 'no_answer', '81', '5948', '2021-08-07 19:25:52'),
('clover', '170', 'no_answer', '81', '5948', '2021-08-07 19:25:52'),
('clover', '167', 'no_answer', '81', '5948', '2021-08-07 19:25:52'),
('clover', '194', 'no_answer', '81', '5948', '2021-08-07 19:25:52'),
('clover', '192', 'no_answer', '81', '5948', '2021-08-07 19:25:52'),
('clover', '169', 'no_answer', '81', '5948', '2021-08-07 19:25:52'),
('clover', '191', 'no_answer', '81', '5948', '2021-08-07 19:25:53'),
('clover', '193', 'no_answer', '81', '5948', '2021-08-07 19:25:53'),
('username', '137', 'دين المحبة والإخاء والسلام', '76', '7278', '2021-08-07 19:33:36'),
('username', '135', 'استقبال أي جهة يشاء', '76', '7278', '2021-08-07 19:33:36'),
('username', '136', 'حصن الإنسان و يقربه إلى الله', '76', '7278', '2021-08-07 19:33:36'),
('username', '136', 'حصن الإنسان و يقربه إلى الله', '76', '9178', '2021-08-07 19:37:55'),
('username', '135', 'طاعة الركوع', '76', '9178', '2021-08-07 19:37:55'),
('username', '137', 'دين العداوة', '76', '9178', '2021-08-07 19:37:55'),
('clover', '165', 'protons, neutrons and electrons', '80', '1479', '2021-08-08 10:39:26'),
('clover', '156', 'from liquid state to vapor state', '80', '1479', '2021-08-08 10:39:26'),
('clover', '160', 'Al', '80', '1479', '2021-08-08 10:39:26'),
('clover', '164', 'calcium', '80', '1479', '2021-08-08 10:39:26'),
('clover', '161', 'halogens', '80', '1479', '2021-08-08 10:39:26'),
('clover', '159', 'number of valency electron', '80', '1479', '2021-08-08 10:39:26'),
('clover', '163', 'ionization energy', '80', '1479', '2021-08-08 10:39:27'),
('clover', '158', '13', '80', '1479', '2021-08-08 10:39:27'),
('clover', '157', 'Si', '80', '1479', '2021-08-08 10:39:27'),
('clover', '162', 'K', '80', '1479', '2021-08-08 10:39:27'),
('username', '152', 'no_answer', '79', '3518', '2021-08-08 11:58:23'),
('username', '150', 'chromatography', '79', '3518', '2021-08-08 11:58:23'),
('username', '153', 'LiCl(aq)', '79', '3518', '2021-08-08 11:58:23'),
('username', '154', 'diffusion', '79', '3518', '2021-08-08 11:58:23'),
('username', '155', 'crystallization', '79', '3518', '2021-08-08 11:58:23'),
('username', '151', 'no_answer', '79', '3518', '2021-08-08 11:58:23'),
('username', '154', 'no_answer', '79', '3224', '2021-08-08 11:59:12'),
('username', '150', 'no_answer', '79', '3224', '2021-08-08 11:59:12'),
('username', '155', 'no_answer', '79', '3224', '2021-08-08 11:59:12'),
('username', '151', 'no_answer', '79', '3224', '2021-08-08 11:59:12'),
('username', '153', 'no_answer', '79', '3224', '2021-08-08 11:59:12'),
('username', '152', 'no_answer', '79', '3224', '2021-08-08 11:59:12'),
('username', '191', 'no_answer', '81', '8905', '2021-08-08 12:02:02'),
('username', '166', 'no_answer', '81', '8905', '2021-08-08 12:02:02'),
('username', '192', 'no_answer', '81', '8905', '2021-08-08 12:02:02'),
('username', '167', 'no_answer', '81', '8905', '2021-08-08 12:02:02'),
('username', '169', 'no_answer', '81', '8905', '2021-08-08 12:02:02'),
('username', '193', 'O2', '81', '8905', '2021-08-08 12:02:02'),
('username', '168', 'Li and Cl', '81', '8905', '2021-08-08 12:02:02'),
('username', '194', 'no_answer', '81', '8905', '2021-08-08 12:02:02'),
('username', '170', 'no_answer', '81', '8905', '2021-08-08 12:02:02'),
('username', '195', 'they are good conductors of electricity', '81', '8905', '2021-08-08 12:02:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmcq`
--
ALTER TABLE `tblmcq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tblquestions`
--
ALTER TABLE `tblquestions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tblmcq`
--
ALTER TABLE `tblmcq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `tblquestions`
--
ALTER TABLE `tblquestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblmcq`
--
ALTER TABLE `tblmcq`
  ADD CONSTRAINT `tblmcq_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tblcategory` (`id`);

--
-- Constraints for table `tblquestions`
--
ALTER TABLE `tblquestions`
  ADD CONSTRAINT `tblquestions_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tblcategory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

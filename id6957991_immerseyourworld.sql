-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2018 at 12:43 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6957991_immerseyourworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`CategoryID`, `CategoryName`) VALUES
(1, 'Headsets'),
(2, 'Cameras'),
(3, 'Drones'),
(4, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ProductBrand` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ProductDescription` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ProductPrice` decimal(9,2) DEFAULT NULL,
  `ProductRating` int(1) NOT NULL,
  `CategoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`ProductID`, `ProductName`, `ProductBrand`, `ProductDescription`, `ProductPrice`, `ProductRating`, `CategoryID`) VALUES
(1, 'Oculus Rift', 'Oculus VR LLC', 'Rift is unlike anything you\'ve ever experienced. Light, adaptable and \r\ncomfortable. When you\'re in VR, the headset goes away and you go \r\nsomewhere incredible. Summon fireballs in mage duels or sculpt\r\nyour next artistic vision—Touch brings the magic of hand presence \r\nto life in VR. What you hear is as important as what you see. \r\nRift\'s integrated 360° spatial audio takes the immersive power of VR \r\nto new depths.			', 599.00, 4, 1),
(2, 'Oculus GO', 'Oculus VR LLC', 'Easily enter virtual reality with no PC or wires attached. \r\nOculus Go is a standalone VR headset made to fit you. \r\nDesigned with breathable fabrics, adjustable straps and \r\nthe best lenses yet.', 369.00, 5, 1),
(3, 'Gear VR', 'Samsung', 'Powered by the Oculus mobile platform, the Gear VR transforms your GALAXY smartphone into a portable VR device that lets you experience anything, anywhere. The most compelling content on Gear VR is at your fingertips. \r\nBrowse a thriving ecosystem of games and experiences, \r\nconnect with friends and more.\"					', 129.00, 3, 1),
(4, 'HTC Vive', 'HTC Corporation', 'Immerse yourself in the world of virtual reality with movements that \r\nmake you feel like you’re in the action. With 360-degree controllers, \r\nheadset tracking, directional audio and HD haptic feedback, \r\nVR has never felt more real. Enjoy the world’s largest selection\r\n of VR apps and games on VIVEPORT and Steam. \r\nDownload the VIVE software and start playing now!', 879.00, 5, 1),
(5, 'HTC Vive Pro', 'HTC Corporation', 'VIVE Pro delivers immersion unlike any other: \r\ntrue-to-life precise tracking, ultra-vibrant colors and \r\nuber-realistic sounds create a world that transports \r\nyou to any scene in split seconds. \r\nWith the highest quality display of any VR headset, \r\nVIVE Pro gives life to any realities.', 1199.00, 4, 1),
(6, 'PlayStation VR', 'Sony Inc', 'Immerse yourself in extraordinary new worlds, \r\nput yourself at the centre of an incredible gaming universe and \r\nexperience a new way to play with PlayStation VR. \r\nPlayStation VR is the latest member of the PS4 family – \r\nso whichever PS4 console you own, you’re PS VR ready; \r\nconnect the headset to your PS4, \r\nadd a PlayStation Camera and leave reality behind.', 419.00, 4, 1),
(7, 'Microsoft Hololens', 'Microsoft', 'Microsoft HoloLens is the first self-contained, holographic computer, \r\nenabling you to engage with your digital content and interact with \r\nholograms in the world around you.', 3000.00, 5, 1),
(8, 'Dell Visor', 'Dell Inc', 'Escape into a world of imagination with Windows Mixed Reality. \r\nSet up your virtual home with great content—travel, sports, culture, \r\nlive concerts, and games—in 10 minutes or less. \r\nAll you need is a headset and a compatible Windows PC.', 799.00, 2, 1),
(9, 'HP Headset', 'Hewlett-Packard', 'With Windows Mixed Reality, you can escape the everyday \r\ninto a world of imagination. Personalise your virtual home \r\nwith great content – travel, sports, culture, live concerts, \r\ngames like Minecraft and more. Surround yourself with apps \r\nfrom 20K available titles: Run movies in your virtual theater, \r\nopen a browser on a second screen. It’s your own multiplex of \r\nmultiple apps and you\'re at the centre of every adventure.', 799.00, 2, 1),
(10, 'Acer MR Headset', 'Acer', 'Combining the naturality of the physical world with the unsurpassed \r\npossibilities of the digital world, \r\nthe Acer Windows Mixed Reality Head Mounted Display treats you \r\nto a whole new level of simulated adventure that’s far more \r\nadvanced than Virtual Reality. Whether you’re looking to play games, \r\nexplore new worlds, or watch immersive multimedia content, \r\nWindows Mixed Reality can give you a remarkable experience.', 799.00, 1, 1),
(11, 'Magic Leap One', 'Magic Leap Inc', 'Magic Leap One Creator Edition is a lightweight, \r\nwearable computer that brings digital content to life \r\nright here in the real world. It’s our very first portal for building \r\nunbelievably believable experiences. And it’s just the beginning.', 2295.00, 5, 1),
(12, 'Google Daydream', 'Google Inc', 'Daydream takes you on incredible adventures in virtual reality. \r\nGet ready to immerse yourself in new experiences. \r\nDon’t just see the world, experience it in a whole new way. \r\nSwim with seals, fly through space and even see dinosaurs \r\ncome back to life. Enjoy VR with a soft, lightweight fabric headset \r\nthat\'s easy to wear and an expressive controller that\'s simple to use.', 149.00, 3, 1),
(13, 'Mavic Air', 'DJI', 'A marvel of engineering and design, the Mavic Air was built to go \r\nwherever adventure takes you. Inheriting the best of the Mavic series, \r\nthis ultraportable and foldable drone features \r\nhigh-end flight performance and functionality for limitless exploration.\r\nThe Mavic Air is the most portable DJI drone to house \r\na 3-axis mechanical gimbal, with its angular vibration \r\nrange reduced to 0.005°. Set in a triangular formation, \r\ngimbal dampeners help create even steadier shots.', 1299.00, 4, 3),
(14, 'Mavic Pro', 'DJI', 'The DJI Mavic Pro is a small yet powerful drone that turns the sky \r\ninto your creative canvas easily and without worry, \r\nhelping you make every moment an aerial moment. \r\nIts compact size hides a high degree of complexity that makes \r\nit one of DJI’s most sophisticated flying cameras ever. \r\n24 high-performance computing cores, \r\nan all-new transmission system with a 5km range, \r\n5 vision sensors, and a 4K camera stabilized by \r\na 3-axis mechanical gimbal, \r\nare at your command with just a push of your thumb or a tap of your finger.', 1399.00, 4, 3),
(15, 'Mavic 2 Pro', 'DJI', 'Made in Sweden, Hasselblad cameras are renowned for their iconic \r\nergonomic design, uncompromising image quality, \r\nand Swedish craftsmanship. \r\nSince 1941, Hasselblad cameras have captured some of the world’s \r\nmost iconic images – including the first moon landing.\r\nCo-engineered in partnership with Hasselblad after two years \r\nof tireless research, the Mavic 2 Pro comes equipped \r\nwith the all-new Hasselblad L1D-20c camera. The L1D-20c possesses \r\nHasselblad’s unique Hasselblad Natural Colour Solution (HNCS) technology, \r\nhelping users to capture gorgeous \r\n20-megapixel aerial shots in stunning colour detail.', 2299.00, 5, 3),
(16, 'Mavic 2 Zoom', 'DJI', 'Made in Sweden, Hasselblad cameras are renowned for their iconic \r\nergonomic design, uncompromising image quality, \r\nand Swedish craftsmanship. \r\nSince 1941, Hasselblad cameras have captured some of the world’s \r\nmost iconic images – including the first moon landing.\r\nCo-engineered in partnership with Hasselblad after two years \r\nof tireless research, the Mavic 2 Pro comes equipped \r\nwith the all-new Hasselblad L1D-20c camera. The L1D-20c possesses \r\nHasselblad’s unique Hasselblad Natural Colour Solution (HNCS) technology, \r\nhelping users to capture gorgeous \r\n20-megapixel aerial shots in stunning colour detail.', 1999.00, 3, 3),
(17, 'Phantom Pro 4', 'DJI', 'The Phantom 4 Pro features more powerful video processing \r\nand a 20-megapixel CMOS sensor. \r\nIt captures H.264 4K video at 60fps or H.265 4K/30fps \r\nwith a 100Mbps bitrate and stills in Adobe DNG RAW. \r\nA custom engineered lens is made up of eight elements \r\narranged in seven groups and optimized for aerial imaging \r\nand a mechanical shutter eliminates rolling shutter distortion \r\nthat can occur when taking photos of fast moving \r\nsubjects or when flying at high speed.', 2399.00, 3, 3),
(18, 'Inspire 1', 'DJI', 'Our new propeller and installation kits feature a smoother, \r\neven more reliable locking mechanism. \r\nThis optimization has drastically reduced the abrasion that is common \r\nwith propeller installation, therefore prolonging the propeller’s overall service life.\r\nThe new motor’s performance has also been improved, \r\nproviding a greater sense of control.\r\nReady-to-fly aerial system\r\nIncluded professional 4K camera and 3-axis stabilization gimbal\r\nLive, wireless HD video transmission via DJI Lightbridge\r\nDedicated remote with flight and camera controls\r\nPowerful app to adjust camera settings, edit videos, and more\r\nVision Positioning system for GPS-free or indoor flight\r\nPerfect for high-level shoots and professional sets', 3099.00, 5, 3),
(19, 'Anafi', 'Parrot', 'ANAFI is the new generation of drone.\r\nIt is the ideal go-to solution to film stunning high-quality videos \r\nand take outstanding photos, capturing the best moments of your everyday life.\r\n• The flying 4K HDR camera boasts exclusive video and photo shooting \r\ncapabilities thanks to its unique 180° tilt gimbal and up to 2.8X lossless zoom.\r\n• Its ultra-compact foldable form means you can take this \r\nParrot drone with you anytime, anywhere.\r\n• Quiet and resitant to extreme weather conditions, \r\nANAFI has a 25-minute flight time with advanced performances.\r\n• Thanks to ANAFI\'s embedded Artificial Intelligence, \r\ntake advantage of its automated flight modes to capture spectacular shots.', 1099.00, 2, 3),
(20, 'Beebop 2 FPV', 'Parrot', 'The essential pack for the most immersive flying sensations\r\nPaired with the Parrot Skycontroller 2 and the Parrot Cockpitglasses, \r\nyour Parrot Bebop 2 drone reveals new capabilities. \r\nEmbark on long-distance courses combining extreme piloting precision \r\nand ultra-real viewing! By flying with the FPV goggles, you\'re totally immersed: \r\nexplore previously inaccessible places like never before \r\nand capture high-quality pictures perfectly.', 849.00, 3, 3),
(21, 'Mambo FPV', 'Parrot', 'Start small by going big! Discover the universe of drones by immersing \r\nyourself into an FPV flight experience like no other! \r\nThis tiny drone can fit in the palm of your hand, but make no mistake \r\nit packs a punch! With the Parrot Mambo FPV, \r\nbreak all boundaries and enjoy an immersive experience that only \r\ncutting edge technology can bring you. \r\nThe FPV camera and Parrot Cockpitglasses 2 \r\nguarantee to plunge you into the unprecedented world of racing. \r\nTake on the other challengers and become a genuine FPV racing pilot.', 269.00, 1, 3),
(22, 'Fusion', 'GoPro', 'Spherical video + photos - Capture incredible 5.2K videos and 18MP photos of everything around you by shooting in every direction at once. OverCapture - Turn 5.2K spherical videos into traditional 1080p videos from any angle right on your phone. Full compatibility on iPhone 6s, iPad mini 4 and later devices; compatibility varies for earlier devices. See Technical Specifications below for Android compatibility. Transform spherical photos into traditional shots - Crop 18MP spherical photos any way you want to create standard resolution photos that are easier to save and share. Create + share on your phone - Preview and play back shots, edit videos and share them on the spot with the GoPro app. Full compatibility on iPhone 6s, iPad mini 4 and later devices; compatibility varies for earlier devices. See Technical Specifications below for Android compatibility. Immersive 360 experiences - Play back spherical footage in VR to bring everyone into the moment with you. Requires two high-performance microSD, microSDHC or microSDXC cards with a Class 10 or UHS-II/III rating or higher. For the best performance, be sure your Fusion camera has the latest software and always use the latest versions of the GoPro mobile app and GoPro Fusion Studio app for desktop', 999.00, 4, 2),
(23, 'Theta V', 'Ricoh', 'Theta V shoots hi-def smooth 360 Degree video at 30 fps @ 3840 x 1920 pixels or 4K. It supports the H.264 file format for video recording ; Remote release: CA-3-compatible.  Hi-res 360 Degree spherical stills & video with improvements to the image quality. New Qualcomm Snapdragon processor has completely enhanced the exposure accuracy and white balance algorithm. Theta has a 4-channel microphone that supports 360 Degree spatial audio recording built in Omnidirectional audio is recorded not just in the horizontal direction but also in the vertical direction. The world’s-first Remote Playback capable fully spherical camera allows users to wirelessly playback 360 Degree images and videos on a large-screen display Using a compatible wireless display adapter. The camera can always be connected to a smartphone using Bluetooth low energy (BLE) This function provides improvements in usability and power consumption', 558.11, 3, 2),
(24, 'Twin', 'Detu', 'DETU Twin is a complete 360 degree VR camera used for shooting entire 360*360 in horizontal and vertical view. It is configured with dual back to back optical F2.0 fish lens, Twin is able to shoot 360 degree video in resolution 3040×1520 at 30 fps in format of MP4. By use of Detu 360 camera app, you can make 360 video with your Android mobile or Iphone anytime, anywhere. With Detu 360 camere app you do not need to stitch all your footage from each individual source. Footage can be stitched automatically and in real time. Twin is a true VR camera for every consumer. After making of 360 degree content, you can instantly share it to your Facebook page or YouTube account. Share happiness with your family and friends in time. Influence your social network with funny VR contents ahead of time. (Tips: Click on the settings icon on Youtube to max out the resolution to3K if it allows. On Facebook make sure to select the HD option. It makes a huge difference). You can even use Twin to live Stream to YouTube and Facebook give viewers a whole new perspective and watch things live like they never could before.But honestly we hope you have some acceptance patience if you want really good quality streaming. Clear packaging for display use,1 year manufacture warranty', 349.00, 3, 2),
(25, 'Gear 360 (2017)', 'Samsung', 'Tell the whole story with the 360° camera that captures every angle in 4K brilliance and share instantly. Capture life as it happens in stunning 4K video and 15MP photos thanks to dual 180° lenses. Gear 360 is easy to hold and take with you, and has an IP53 water-resistant rating*. Preview and edit your videos with an easy-to-use app, or share them straight to social** or Samsung VR with your Galaxy S8 or S8+ ***. Upload your photos or videos to Samsung VR to experience your moments in virtual reality', 169.00, 3, 2),
(26, '360 VR', 'Yi', '5.7K Resolution: Records 360 videos in up to 5.7K resolution at 30 frames per second with the \'Auto-Stitch\' option in the app or in the in-camera menu turned off, ready to stitch in the accompanying YI 360 Studio (Windows) （Note: Compatible devices and software is required to playback 5.7K videos). In-Camera Stitching: 4K/30fps in-camera stitching, shoot then share complete 4K 360 videos and pictures without the need of post-processing. 4K Live Streaming: Live stream 360° videos in up to 4K resolution with the built-in 2.4GHz & 5GHz Wi-Fi (5GHz recommended). Dual-Lens: Dual-lens camera, each lens is 220° with an aperture of f/2.0 and together provide complete 360° coverage, with clear vibrant images and zero blind spots; Built-in Advanced Electronic Image Stabilization(EIS) keeps your footage stable. YI 360 APP: Use the accompanying YI 360 App (iOS & Android) to effortlessly connect to your smartphone, where you can view in four different modes, download and share to social media, instantly. Includes: YI 360 VR Camera, battery, USB Type-C cable,mini tripod, protective bag, user manual. NOTE:YI 360 is only compatible with 1400mAH YI 360 VR/4K/4K+ Replacement Battery.', 471.00, 3, 2),
(27, 'PixPro SP360 4K', 'Kodak', 'YouTube & Facebook Compatible For 360 Degree Videos. 4K Equivalent VR Video. 235 Degree FOV / Ultra Wide Lens. Control Wirelessly with iOS/ANDROID Smart Device APP. PIXPRO 360 Stitch Software Included (For Mac and PC)', 369.00, 4, 2),
(28, 'One', 'Insta360', '360° Capture - The ONE shoots in every direction at once, capturing life in seamless 4K 360° video and 24 MP 360° photos. Once you’ve got your shot, re-frame the best parts, or share a full 360° experience straight from your phone. FlowState Stabilization-Best-in-class stabilization ensures pro-level footage,no matter what you’re doing.Running,cycling,even letting your dog carry the camera it all comes out hypnotically smooth.It’s better than a gimbal,and with none of the hassle. Shoot First, Point Later - Create a stunning edit with a few taps. Mark off the best parts of your 360° footage and the ONE connects them with ultra-smooth camera movements. Invisible Selfie Stick - Mount the ONE on a selfie stick and watch as it instantly disappears from view. The result: easy aerial shots without a drone. Three Ways to Shoot - Use the ONE on its own, control it with Bluetooth, or connect directly to your iPhone and preview shots in real time. No cables. No hassle. Tons of flexibility.', 399.00, 4, 2),
(29, 'VIRB 360', 'Garmin', 'Resolution up to 5.7K/30fps with desktop stitching; 4K/30fps auto-stitched in-camera. Up to 15-megapixel resolution provides high-quality, spherical photos. HyperFrame Director Mode gives you the editing power to easily reframe content after filming — using smooth camera pans, incredibly wide angles and even tiny planets. Spherical stabilization ensures smooth video regardless of camera movement. Built-in sensors provide G-Metrix data overlays in 360-degree augmented reality', 1189.95, 5, 2),
(30, '360fly 4K', '360fly', 'The 360fly 4K video camera delivers everything you need to capture your entire surroundings in immersive, interactive 360 Degree 4K video from a single digital unit. Powerful 16-megapixel image sensor. Provides 4K video resolution 2880 x 2880 pixels up to 30fps. Provides professional video features. Includes time-lapse and front-facing modes as well as motion and audio activation.', 410.99, 4, 2),
(31, '360 Cam (LGR105)', 'LG', 'Dual 13MP Sensors. Wide-Angle Lenses.  Records 2K 360 Video. 5.1-Channel Surround Sound. microSD Compatible, Upload to Google Street View, YouTube360, 1200mAh Battery. Cannot be activated without external memory inserted', 175.00, 3, 2),
(32, 'KeyMission 360', 'Nikon', 'Nikon KeyMission 360 4K Ultra HD Action Camera Bundle. Bundle Includes: Vivitar Action Kit - Chest Mount - Head Mount - Handlebar Mount - Vented Helmet Mount - Selfie Stick. 64 GB Micro SD Memory Card. Microfiber Cleaning Cloth. Compact and lightweight with over 10 mounting accessories available', 399.00, 2, 2),
(33, 'Theta SC', 'Ricoh', 'High quality 360 degree images in a single shot. Record 360 degree video in full HD (30fps, 5 mins). Compatible with most iOSand Android smart devices. Built in WIFI for easy transfer of images & video. 2 Year Warranty', 349.95, 4, 2),
(34, '360 Video Camera', 'Rylo', '360 Video: Capture everything around you in 4K 360 video. Create a regular HD video by selecting a traditionally-framed view within the 360 footage, or share a fully immersive video in 4K 360. Breakthrough Stabilization: With breakthrough stabilization and horizon leveling automatically built in, Rylo makes your videos look like they were shot on a professional stabilization rig.. FrontBack: Put yourself in the action with a picture-in-picture that shows your facial expression as you capture a moment.. Points: Control the camera\'s perspective, after-the-fact, by tapping on specific points of interest in your video. Rylo magically produces a fluidly smooth video that connects each of your points. Time-lapse: Create moving time-lapse videos by speeding up Rylo\' s stabilized video. Control how fast you want your video to play (up to 16x normal speed) and make professional-looking time-lapse.', 929.00, 4, 2),
(35, '3D 360 4K', 'Vuze', '4K Stereoscopic 3D 360 Video and Photo. Lightweight and Easy to Use. Automatic VR content creation with proprietary stitching technology in Vuze VR Studio. VR Video Compatible with Youtube, Facebook and any VR headset or mobile device', 1694.33, 3, 2),
(36, 'Mi Sphere', 'Xiaomi', '360° Panoramic View- An ultra-wide angle high aperture lens + Reflective prism eliminates blind spots: Panoramic cameras will create a blind spot according to the size of their body. We\'ve minimized the blind spot on both sides using two 190° wide-angle fish eye lenses with large F2.0 aperture and two mirrors. Mi Sphere Camera integrates exceptional components and high-level design in both optical structure and build quality. 7K panoramic photo up to 23.88 effective megapixels: Dual 1/2.3\" Sony image sensors are highly light sensitive at 1600W, allowing seamless transitions at resolutions of 6912x3456 (up to 7K). Hardware-level EIS Stabilization: Powerful image stabilization at high-quality Video remains clear even while in motion. 6-axis EIS corrects for movement in multiple directions- even while skiing, skydiving, bungee jumping, or other high-speed movements. Professional-grade image fidelity: 3.5K ultra-high definition panoramic video Nearly 360° recording. The two lenses automatically calibrate and adjust the image and colors - ensuring smooth video recording at 3456×1728/30fps or 2304×1152/60fps. This is perfect for indoor, outdoor, travel, business, journalism, film, and other uses. Built-in 1600mAh battery and Quick Charge 2.0: On just one charge, Mi Sphere Camera can record up to 75/90 minutes of HD panoramic video with Wi-Fi on/off - and up to 200 photos.', 414.05, 5, 2),
(37, 'Gear 360', 'Samsung', 'Immersive 360 Cam High-Res Video and Photo. F2.0 Dual Lenses Clear in Low Light / High Resolution 3840x1920 Video. Time-Lapse Video Real 360 Event Logging. MicroSD card is required for shooting.', 132.00, 3, 2),
(38, 'Nano', 'Insta360', 'Compatible with iPhone 7, 7 plus, and iPhone 6/6S, 6 plus/6S plus, or used alone. 3040x1520 resolution @ 30fps. Dual 210 Degree Fisheye Lenses, Portable size. Real-time 360 video/photo sharing on Facebook/WeChat, Live streaming. Free app, 360 player/studio/plugin, VR cardboard box', 89.00, 3, 2),
(39, 'Nano S', 'Insta360', '4K Ultra-HD 360 Video; 20 MP 360° Photos, Turn your iPhone into a 360 camera. Nano S new features: MultiView + MultiView Live + MultiView Chat, 360 Live-streaming, Advanced real-time stabilization, FreeCapture, SmartTrack, Color Options. All-new 360-Degree video chat lets you share an immersive, real-time view of your world. Creating VR content, play back your best shots on a headset and dive straight into the action. Compatible devices: iPhone X, iPhone8/8 plus, iPhone 7/7 plus, iPhone 6s/6s plus, iPhone 6/6 plus, running iOS 9.0 and later', 282.15, 4, 2),
(40, 'Air', 'Insta360', 'Plastic. Video Resolution: 2560 x 1280 (some cell phones support 3008 x 1504) @30fps. Photo Resolution: 3008 x 1504 (3k). Phone compatibility- Android phones. Live Streaming: On any 360 platform in cl. YouTube, Insta360 server via link sharing. Real-time 360 video/photo sharing on Facebook, YouTube, Twitter, WhatsApp, Messenger, WeChat. 360 degree video talk on Skype and other meeting software', 188.00, 3, 2),
(41, 'Giroptic IO', 'Giroptic IO', 'Includes Giroptic iO and carrying case. The easiest way to transform your iOS device into a powerful 360 degree camera so you can capture and share 360 degree photos and videos from where you are. Giroptic iO allows you to livestream in 360 degrees to social media platforms, including Facebook, YouTube, and Twitter. Compatible with iPhone 5S, SE, 6, 6S and 7. Compatible with iPad Mini 2, 3, 4, iPad Air 2, 3 and Pro.', 299.95, 4, 2),
(42, 'Pro', 'Insta360', '360 + 360 3D Imaging, 8K Ultra high definition. Capture stills and videos in stunning 8K. Go deep with 360 3D. Stay steady with advanced real time image stabilization. Optical flow image stitching: seamless, dynamic, precise. Purpose-built real-time image stitching and preview. Grab a headset and dive into the scene as you capture. Live-stream in immersive 3D 360 as the story unfolds. 60% bandwidth reduction for smooth, efficient live-streaming. Using cube map projection and H.265 compression, creators can cut bandwidth needs by 60%. Capture stunning slow-mo with 120fps high-speed shooting mode.', 5038.43, 5, 2),
(43, '4i', 'Orah', '360 live capture and stream. High resolution video (4K). Many professional features. Easy to use. Seamlessly connects with video platforms (YouTube, Facebook, Twitter…)', 5089.42, 4, 2),
(44, 'Omni', 'GoPro', 'Spherical Rig with 6 HERO4 Black Cameras. 8K Max Capture Resolution. Compact Form Factor. Pixel-Level Camera Syncing. Includes 2 Stitching Software Programs. V-Mount Battery Power. Includes 6 microSD Cards with Readers. Includes Waterproof Carrying Case', 2622.95, 3, 2),
(45, 'Z Cam S1', 'Z Cam', 'Each of its four fisheye lenses is constructed with 10-layer, professional-grade optics, minimizing distortion and flare. Unlike rig-based VR systems, the S1\'s four integrated sensors provide coordinated auto-exposure and white balance functions. The built-in Z CAM Sync Hardware ensures synchronized recording, and Z-Log gamma enables image fine-tuning and color grading. The S1\'s compact, cylindrical body measures just over 9.5\" high when used with its detachable battery unit. When powered via the included AC adapter, the S1 is under 6\" high. With a slim, under 4\" diameter form, the camera can be placed 2.6\' or closer to subjects. SanDisk Extreme Pro cards are recommended for recording to the S1\'s four SD card slots.', 1.00, 2, 2),
(46, 'Z Cam S1 Pro', 'Z Cam', 'This is a fully integrated camera with four Sony Exmor sensors paired with four VRCA 220° fisheye lenses, while four dedicated processors record to four SDXC card slots. The camera offers you auto, manual, and coordinated exposure and white balance settings, which aid in post stitching of your video. The camera is powered by a removable battery module that accepts four 18650 button top batteries (not included). A protective carrying case is included for transport and storage. Simultaneously records MOV video using the H.264 codec to four SDXC cards. One card is dedicated to each lens/sensor combination. You can use virtually any post stitching software to create 360° video from the four separate MOV video files. Live streaming of your 360° video requires that you connect your camera to a Windows PC via the Ethernet port and use WonderLive software (not included). The battery unit accepts four 18650 button top batteries, which allow the camera to shoot without being connected to a power supply. The 18650 batteries are not included and must be sourced separately.', 8.00, 4, 2),
(47, 'Qoocam', 'Kandao', 'Equipped with three fisheye cameras with a 220° field of view, f2.2 lens aperture. With 360-degree panoramic view and 180-degree stereo VR, QooCam supports 4K UHD high-resolution video and photo shooting. It is also possible to switch modes by 90° rotation, and easily take 3D 180 degree video/photo with two lenses in the forward direction.QooCam built-in three-axis IMU anti-shake sensor, with advanced real-time stability software technology and internal anti-shake image algorithm, can effectively solve the \"offset\", \"tilt\", \"swinging\" or \"rotation\" and other jitter effects.These features allow users to capture smooth, stable HD 3D/panoramic video in any motion scene without the need for stabilizers. Qoocam combines deep image technology with professional-grade Obsidian VR cameras, allowing users to enjoy the advanced 6Dof VR experience. When shooting in 3D VR 180 mode, the depth information of the scene is recorded, the distance of objects in the space is calculated, and the image is layered. QooCam can capture 120fps high frame rate 360° panorama/180° 3D video with one button, perfectly capturing every fleeting moment of speed and creating excellent slow motion. Slow and fast control, QooCam also supports time-lapse photography, automatically shooting 360 ° panorama / 180 ° 3D photos at specific time intervals. Through the App post-processing, you can get excellent delay video.', 564.27, 4, 2),
(48, 'Z Cam K1 Pro', 'Z Cam', 'The Z Cam K1 Pro Cinematic VR180 Camera captures 180° video with two fisheye lenses to dual SDXC cards. In addition to the two fisheye lenses, the camera supports an external stereo microphone and records audio using the AAC format. The captured footage can be used for stereoscopic 3D effects or can be stitched to create an image compatible with the VR180 format. The camera features a built-in Ethernet port that supports PoE (Power over Ethernet) and has built-in Wi-Fi. WonderLive software (Windows) is downloadable, and it allows you to live stream your footage. The Z CAM Controller software (Windows or Mac) allows you to control the K1 Pro from your computer via the camera\'s Ethernet connector. VR180 cameras capture photos and video in 3D, but can be viewed and shared in either 2D or 3D. A VR headset is required to experience your images in VR. Your footage can be imported into an edit system that supports stereoscopic video.', 4236.55, 4, 2),
(49, 'Fusion Battery	', 'GoPro	', 'Rechargeable 2620mAh lithium-ion battery.\r\nUse as a spare or replacement battery for your fusion.\r\nCompatible with GoPro fusion camera.', 29.99, 4, 4),
(50, 'SanDisk Extreme 64GB microSDXC UHS-3 Card', 'SanDisk', 'Ideal for 4K UHD and Full HD video2\r\nTransfer speeds of up to 100MB/s\r\nRescuePRO Deluxe data recovery software\r\nSanDisk Memory Zone app for easy file management\r\nShock-, temperature-, water-, and X-ray-proof', 38.00, 4, 4),
(51, 'SanDisk Extreme 32GB microSDHC UHS-3 Card', 'SanDisk', 'Ideal for 4K UHD and Full HD video2\r\nTransfer speeds of up to 100MB/s\r\nRescuePRO Deluxe data recovery software\r\nSanDisk Memory Zone app for easy file management\r\nShock-, temperature-, water-, and X-ray-proof', 19.99, 3, 4),
(52, 'SanDisk Extreme 128GB microSDXC UHS-3 Card', 'SanDisk', 'Ideal for 4K UHD and Full HD video2\r\nTransfer speeds of up to 100MB/s\r\nRescuePRO Deluxe data recovery software\r\nSanDisk Memory Zone app for easy file management\r\nShock-, temperature-, water-, and X-ray-proof', 43.75, 5, 4),
(53, 'Smatree 3 Way Foldable Pole/Monopod', 'Smatree', 'X1S made of high-quality Aluminium Alloy for greater strength and stability.Flexible ball head provide 360 degree rotation angle for your camera and cell phone to get different best shooting position. Fits for GoPro Hero 7/6/5/4/3+/3/2/1/Session Cameras / for Ricoh Theta S, M15 Cameras/ Compact Cameras(1/4\"\" thread) / Cell Phones(56mm-80mm)\r\nThree section pole design for 3-Way: Camera Grip, Foldable Extension Arm, and Low Angle Shot Stabilizer.Foldable Pole can be adjusted to different shapes for best shooting effects\r\nGroup photo-taking with quick length extension from 5.9 inch to 19.3 inch, portable and convenient to carry around, easily put it in your bags\r\nUniversal tripod for any monopod with 1/4\"\" screw port at the bottom to stand alone. It is durable and sturdy, holds monopod on top securely.\r\nThe combination of camera selfie stick +tripod stand enables you to record photo and video for hours with minimum effort. This professional design bring you a relaxed shooting environment.', 32.99, 3, 4),
(54, 'Insta360 One Waterproof Housing', 'Insta360', 'The housing protects the ONE from water up to 3 meters.The camera, however, is not specifically designed for 360 underwater video capture – the refraction that light undergoes as it passes through water can result in stitching lines.\r\nBy using the FreeCapture function, users can reframe the best parts of an underwater 360 video as standard, “flat” content to avoid stitching lines.\r\nWhen using the ONE in a low-temperature environment, it’s best to use anti-fog inserts along with the waterproof housing to prevent condensation from affecting your shots.\r\nWhen in an environment where water- and dust-proofing aren\'t necessary, it\'s best to use the ONE without a housing.', 49.00, 2, 4),
(55, 'Insta360 Bullet Time Bundle (Handle & Selfie Stick)', 'Insta360', 'Bullet-Time Bundle includes Invisible Selfie Stick and Bullet-Time Handle\r\nGet the perfect Bullet-time shot, smooth and stable', 39.00, 3, 4),
(56, 'Oculus Touch', 'Oculus VR LLC', 'Oculus Touch is a motion controller system that was designed from \r\nthe ground up with virtual reality (VR) in mind. \r\nEach Oculus Touch consists of a pair of controllers, one for each hand, \r\nthat essentially operate like a single gamepad \r\nthat has been split down the middle.', 149.00, 3, 4),
(57, 'Oculus Sensor', 'Oculus VR LLC', 'With a clear line of sight, Oculus Sensor tracks constellations \r\nof IR LEDs to translate your movements in VR. \r\nIts stand is ideal for most setups, and its standard 1/4-20 mount \r\nworks with most tripods. Requires Rift, sold separately. \r\nWhen used as a third sensor, \r\nit requires an additional USB 2.0 or higher port.', 89.00, 4, 4),
(58, 'Oculus Earphones', 'Oculus VR LLC', 'Experience even more immersive audio with Oculus Rift Earphones. \r\nThese in-ear headphones are specially designed for your Rift headset \r\nto reduce sound distractions while you\'re in virtual experiences. \r\nRequires Rift, sold separately.', 69.00, 2, 4),
(59, 'Oculus Go Controller', 'Oculus VR LLC', 'Take control of every adventure.\r\nNavigate to far-off worlds or find your favourite show, \r\nall with one easy-to-use controller. \r\nWhether you\'re drawing a masterpiece or your blaster, \r\nsensors inside the controller translate your natural movements into VR.', 35.00, 5, 4),
(60, 'HTC Vive Controller', 'HTC Corporation', 'Lets you wirelessly interact and play with the virtual world. \r\nFeatures 24 sensors, multi-function trackpad, dual-stage trigger, \r\nHD haptic feedback and a rechargeable battery.', 199.00, 5, 4),
(61, 'HTC Vive Tracker', 'HTC Corporation', 'The VIVE Tracker 2018 creates a wireless and seamless connection \r\nbetween your attached tools and the VIVE system. \r\nYou can also attach a DSLR camera to the VIVE Tracker 2018 \r\nto make mixed reality videos and expand the fun.', 169.00, 4, 4),
(62, 'HTC Vive Base Station', 'HTC Corporation', 'Powers the presence and immersion of room-scale virtual reality \r\nby helping the Vive headset and controllers track their exact locations. \r\nFeatures wireless syncing.', 199.00, 4, 4),
(63, 'Samsung Gear VR Controller', 'Samsung', 'Motion controller for more realistic interaction\r\nAbility to recognize hand motion, evolving interactions and gameplay in VR\r\nAn ergonomic design with a trigger for natural, intuitive control\r\nUnlocks even more amazing experiences in VR.Compatible OS Android Lollipop 5.0 or later\r\nThe Gear VR controller works with Galaxy S8 and Galaxy S8+ as well as previous VR-enabled handsets, including Galaxy S7, Galaxy S7 edge, Galaxy S6, Galaxy S6 edge, Galaxy S6 edge+ and Galaxy Note5 and previous generation Gear VR headsets.', 39.99, 5, 4),
(64, '360fly Rugged Handlebar Mount', '360fly', 'Includes standard ¼-20 male mount, short/long screws, Wrench\r\nExtended arm gets all the action\r\nAllows for vertical and horizontal camera adjustments', 36.60, 4, 4),
(65, '360fly Dive Housing', '360fly', 'Standard ¼-20 female base\r\nCapture dives in immersive 360 Degree video\r\nWith one push button control', 69.99, 3, 4),
(66, 'Vuze Camera Mini Tripod', 'Vuze', 'Vuze Camera Mini Tripod is an elegant support device for shooting stable and blur-free images with your camera. It also doubles as a selfie stick for a Vuze 360 camera, handheld or stationary	', 50.15, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `Subscriptions`
--

CREATE TABLE `Subscriptions` (
  `SubscrID` int(11) NOT NULL,
  `SubscrEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UserID`, `FirstName`, `LastName`, `Email`, `Username`, `Password`) VALUES
(2, 'Zoran', 'Ilievski', 'ilievski_zoran@live.com', 'zoran', '$2y$10$/zi9MPxgBYNjgX.Rw/Sf6.TuWyGSh9wR2qgOGmzZp9z0PzLQbFcXy'),
(3, 'Michael', 'Hallorina', '6955@ait.nsw.edu.au', 'mikulangots', '$2y$10$vnMgsT6Iqex5XHMCga0X1.y4.VeZkOiTLY81JSFLEVC28EKC3g8De'),
(4, 'aaaa', 'aaaa', 'aaaa@aa', 'aaaa', '$2y$10$803rgcGEodOnYfgh4ldvKuVIlrLf6N1/leymsPg99dBhbmPgpn5wG'),
(5, 'Goran', 'Ilievski', 'goran@gmail.com', 'goran', '$2y$10$E9vXDM/WC6VgRUdAg/0EwO7cImsRJZbO.yd9Bk3iXwitHiNTMHMdG'),
(6, 'Goran', 'Ilievski', 'goran@gmail.com', 'a', '$2y$10$/n8Ndp7eZFZLFBkJLCAQmOPe27h53IzZjQYdn2/yh52/nw2ccLmBS'),
(7, 'Rodolfo', 'Arguello', '6633@ait.nsw.edu.au', 'nicomoshi', '$2y$10$b8OBuB16P.hYJW.KdyPZyeiMOxMhLs9CE7PeO4c//2zdRgEJYTzJO'),
(8, 'Uday', 'Singh', 'uday@something', 'uday', '$2y$10$xyhhizKSS4u3mqtwSQj6DumyrrcyguClUHPGH/dNH8t6tgfAvBfhy'),
(9, 'Bile', 'Laino', 'bile@bile', 'bile', '$2y$10$RncjwRBZS8PYYnys2TrZ/e6thr8WF/cVW/HkiYRa3dc0N3exztjL2'),
(10, 'vivi', 'H', 'vivian@gmail.com', 'viv', '$2y$10$ajBShsV7JCh4mA8F5/vwdutetvs9DUAvJ7QkIwiQkRa3eTYaD23MK'),
(11, 'vivi', 'H', 'vivian@gmail.com', 'viv', '$2y$10$8s7Aac.ya62IzW2b1cXhEOMM.iT9OYwr84OY6EZlddfqpfHeIOdAG'),
(12, 'vivi', 'H', 'vivian@gmail.com', 'vi', '$2y$10$ng1gYF1gD1GuqhbbV4ahMuIAfHRNok62Z6FzKQ4yV0aQylpvNqnt2'),
(13, 'vivi', 'H', 'vivian@gmail.com', 'vi', '$2y$10$u1RyUqhS80AX4AstvfxN6uD6l/7BcX7K/KJe.Z.Nk96SkDffoS3au'),
(14, 'vivian', 'H', 'viviannnnn@gmail.com', 'vivi', '$2y$10$io/cV3sOuuuWqIWHchzz1.SmRMb5C3cEi68s9C9wgEt7jyjJMklHm'),
(15, 'Vivian', 'a', 'a@a', 'a', '$2y$10$UfYKfl0RCV68EqETKWVrGuO81xloqy1DrzIdnvS/LPBugIt1UBmO.'),
(16, 'asdasdasd', 'asdasdasd', 'asdasd@sdasd', 'asdasd', '$2y$10$PNhSV1eCQSMhlMJBSZ/8LO5z2FGcPlkM5n.ATnmcxM9ZsbsLMIDMu'),
(17, 'Goran', 'Ilievski', 'goranacm@gmail.com', 'goranacm', '$2y$10$RNBSGcO/ldhD06Zo4/sCAe.tzHHhB0umaNlq1kxKfbkNGk25mDUCe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `Subscriptions`
--
ALTER TABLE `Subscriptions`
  ADD PRIMARY KEY (`SubscrID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `Subscriptions`
--
ALTER TABLE `Subscriptions`
  MODIFY `SubscrID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `Products_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `Category` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

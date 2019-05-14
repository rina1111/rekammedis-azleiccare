-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2019 pada 05.16
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azleic_care`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `code`
--

CREATE TABLE `code` (
  `code_id` int(11) NOT NULL,
  `code` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `code`
--

INSERT INTO `code` (`code_id`, `code`) VALUES
(1, 'ea5f7fbf-f33e-4a4e-b5ee-086d5e5450b5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosas`
--

CREATE TABLE `diagnosas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `diagnosa` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `diagnosas`
--

INSERT INTO `diagnosas` (`id`, `diagnosa`) VALUES
(2048, 'ï»¿'),
(2049, 'Abdominal pain'),
(2050, 'Ablasi dan kerusakan retina'),
(2051, 'Ablasio Retina / Cornea'),
(2052, 'Abortus iminens'),
(2053, 'Abortus infeksius'),
(2054, 'Abortus inkomplit'),
(2055, 'Abortus insiplens'),
(2056, 'Abortus lainnya'),
(2057, 'Abortus medik'),
(2058, 'Abortus spontan'),
(2059, 'Abses(LUKA)'),
(2060, 'Abses abdominal'),
(2061, 'Abses Akilla'),
(2062, 'Abses apendicular/apendikes'),
(2063, 'Abses app'),
(2064, 'Abses bartolin'),
(2065, 'Abses beplum'),
(2066, 'Abses CD'),
(2067, 'Abses cerebri'),
(2068, 'Abses colli'),
(2069, 'Abses cornea'),
(2070, 'Abses coxal'),
(2071, 'Abses dada'),
(2072, 'Abses gingival'),
(2073, 'Abses ginjal'),
(2074, 'Abses hati amuba'),
(2075, 'Abses hati/liver/hepar'),
(2076, 'Abses ingunialis'),
(2077, 'Abses kepala/ragio'),
(2078, 'Abses lutut kiri/axilla/femur/femoral'),
(2079, 'Abses mama'),
(2080, 'Abses mandibula'),
(2081, 'Abses otak'),
(2082, 'Abses pada dada'),
(2083, 'Abses pagina'),
(2084, 'ABSES PALATUM'),
(2085, 'Abses palpebra'),
(2086, 'Abses pancereas'),
(2087, 'Abses pantat/buttock/glutea'),
(2088, 'Abses paraparingeal'),
(2089, 'Abses parienal'),
(2090, 'Abses paru'),
(2091, 'Abses paru/lung'),
(2092, 'Abses peritonsilair'),
(2093, 'Abses perodental'),
(2094, 'Abses perut'),
(2095, 'Abses pinggang kiri'),
(2096, 'Abses pipi'),
(2097, 'Abses post op/luka oprasi'),
(2098, 'Abses renal'),
(2099, 'Abses Retro pritonial'),
(2100, 'Abses sub mandibula'),
(2101, 'Abses torax'),
(2102, 'Abses turbo ovarial (ATO)'),
(2103, 'Abses umbilicia/dinding (Abdomen punggung)'),
(2104, 'Achalasia cardia / esopagus'),
(2105, 'Achelasia congenital'),
(2106, 'Achelasia pylorus'),
(2107, 'Acut abdomen'),
(2108, 'Acut laringo tracea broncitis'),
(2109, 'Acut myelocitic leukemia (AML)'),
(2110, 'Acut respiratory distress syndrom'),
(2111, 'Acute hepatic failure'),
(2112, 'Adamantinoma'),
(2113, 'Adeno ca'),
(2114, 'Adeno ca. gaster'),
(2115, 'Adeno Ca.Colon'),
(2116, 'Adeno Ca.paru'),
(2117, 'Adeno tonsilitis cronis'),
(2118, 'Adenomycosio'),
(2119, 'Adnexitis'),
(2120, 'After Coming head'),
(2121, 'Agranulositosus'),
(2122, 'Akibat dari kemasukan benda asing melaluiÂ  lubang tubuh'),
(2123, 'Alergi'),
(2124, 'Alergi rhinitis akibat kerja'),
(2125, 'Aleukimia leukimia'),
(2126, 'ALL'),
(2127, 'Amebiasis'),
(2128, 'Amebiasis lainnya'),
(2129, 'Amenore'),
(2130, 'Amenorrhea'),
(2131, 'AMI ( infark miokard akut)'),
(2132, 'Amputasi jari kaki satu'),
(2133, 'Anemia (gravio)'),
(2134, 'Anemia aplastik lainnya'),
(2135, 'Anemia defisiensi zat besi'),
(2136, 'Anemia hemolitik'),
(2137, 'Anemia Hemolitik'),
(2138, 'Anemia lainnya'),
(2139, 'Anemia pasca pendarahan'),
(2140, 'Anencepalus bayi'),
(2141, 'anencepalus ibu'),
(2142, 'Aneorisme Aorta Abdominal'),
(2143, 'Aneuryama aorta'),
(2144, 'Angina pictoris'),
(2145, 'angina pictoris unsiable/fasca infark'),
(2146, 'Angio fibroma nasofaring'),
(2147, 'Angioauritic Alergi'),
(2148, 'Anomali intra cranial'),
(2149, 'Anomia post partum'),
(2150, 'Anoptalmia'),
(2151, 'Anorexia'),
(2152, 'Anthraks'),
(2153, 'Antonea Uteri'),
(2154, 'Anxietas'),
(2155, 'Aorta insufisianis'),
(2156, 'Aorta stenosis'),
(2157, 'Apasia'),
(2158, 'APB'),
(2159, 'Apekia'),
(2160, 'Apendicitis'),
(2161, 'Apendicitis acut'),
(2162, 'Apendicitis kronis'),
(2163, 'Apendicitis perforasi'),
(2164, 'Apendicular'),
(2165, 'Apendix infilltrat'),
(2166, 'Apnea'),
(2167, 'Apnea bayi'),
(2168, 'Apneic spell'),
(2169, 'AR'),
(2170, 'Aritmia'),
(2171, 'Artialgia'),
(2172, 'Artretis'),
(2173, 'Artritis belia'),
(2174, 'Artritis piogenik dan artritis pada penyakit infeksi dan parasit YDK di tempat lain'),
(2175, 'Artritis reumatoid'),
(2176, 'Artropati dan artritis'),
(2177, 'Artropati reaktif'),
(2178, 'Artrosis'),
(2179, 'Ascariasis'),
(2180, 'Ascites'),
(2181, 'ASD ( Atreal septa depta )'),
(2182, 'Aseptor implant'),
(2183, 'Asidosis metabdik'),
(2184, 'Asma akibat kerja'),
(2185, 'Asma bronciale (AB)'),
(2186, 'Asphixia'),
(2187, 'Asphixia berat'),
(2188, 'asphixia ringan'),
(2189, 'Aspirasi hidung'),
(2190, 'Aspirasi mecodum'),
(2191, 'Aspirasi minyak T /Bd.Asing/Food'),
(2192, 'Aspirasi pnemunea dewasa'),
(2193, 'Aspirasi pnemunia bayi'),
(2194, 'Astenea'),
(2195, 'Atelactasis'),
(2196, 'Aterosklerosis'),
(2197, 'Atoroma'),
(2198, 'Atresia ani'),
(2199, 'Atresia duodeni'),
(2200, 'Atresia Ileum'),
(2201, 'Atresia rectum'),
(2202, 'Atrial fibrilasi (AF)'),
(2203, 'Atritis Rematik'),
(2204, 'AV block'),
(2205, 'Avulsion'),
(2206, 'Azotermia'),
(2207, 'Balanitis'),
(2208, 'balanitis'),
(2209, 'Basalioma Canthus lateralis'),
(2210, 'Basalioma hidung/pipi/mata'),
(2211, 'Basalioma telinga'),
(2212, 'Batu btaghorn'),
(2213, 'Batu empedu'),
(2214, 'Batu ginjal'),
(2215, 'Batu uretra /BBB'),
(2216, 'batuk rejan ( pertusis)'),
(2217, 'bayi belum lahir ( infartu)'),
(2218, 'Bayi besar'),
(2219, 'bayi kurang minum'),
(2220, 'bayi mati'),
(2221, 'bayi meninggal ibu hidup (KJDR)'),
(2222, 'bayi normal'),
(2223, 'Bayi sectio'),
(2224, 'Bayi vakum'),
(2225, 'BBLR'),
(2226, 'Benda asing pada telinga'),
(2227, 'berkelahi'),
(2228, 'Bibir celah dan langit-langit celah'),
(2229, 'Bibir sumbing'),
(2230, 'Bilgted ovum'),
(2231, 'Biliary kolik'),
(2232, 'Bisinosis'),
(2233, 'Bleeding post coitus'),
(2234, 'Block Water Fever'),
(2235, 'Bloody diare'),
(2236, 'Bmdicardia'),
(2237, 'bortolintitis'),
(2238, 'BPH ( prostat)'),
(2239, 'Bracial Palsy'),
(2240, 'Bronciektasis'),
(2241, 'Bronciolitis /Acut'),
(2242, 'Broncitis'),
(2243, 'Broncitis acut'),
(2244, 'Broncitis kronik'),
(2245, 'Bronco pnemunia'),
(2246, 'Bronkiektasis'),
(2247, 'Bronkitis akut dan bronkiolitis akut'),
(2248, 'Bronkitis, emfisema dan penyakit paru obstruktif kronik lainnya'),
(2249, 'Bruselosis'),
(2250, 'Buka pen'),
(2251, 'Buka spiral'),
(2252, 'bunuh diri dengan membakar diri'),
(2253, 'bunuh diri dengan menusuk badan'),
(2254, 'Burger O'),
(2255, 'Burt abdomen'),
(2256, 'Buta dan rabun'),
(2257, 'CA ewametrium'),
(2258, 'Ca. Blader'),
(2259, 'Ca. Buli-buli'),
(2260, 'Ca. Caecum'),
(2261, 'Ca. Cerviks'),
(2262, 'ca. Coll'),
(2263, 'Ca. Colon'),
(2264, 'ca. Corpus'),
(2265, 'Ca. Epidermoid'),
(2266, 'Ca. Esopagus'),
(2267, 'Ca. Femur'),
(2268, 'Ca. Gaster/lambung'),
(2269, 'ca. Gland (kelenjar)'),
(2270, 'Ca. Laring'),
(2271, 'Ca. Lidah'),
(2272, 'Ca. Mama'),
(2273, 'Ca. Mandibula'),
(2274, 'Ca. Nesofaring'),
(2275, 'Ca. Ovari'),
(2276, 'Ca. Palata'),
(2277, 'Ca. Pancereas'),
(2278, 'Ca. Pantat'),
(2279, 'Ca. Parotis ( pinggang)'),
(2280, 'Ca. Paru'),
(2281, 'ca. Penis'),
(2282, 'Ca. Rahim/uterus'),
(2283, 'Ca. Recti'),
(2284, 'Ca. Sigmoid'),
(2285, 'ca. Squo mous cell'),
(2286, 'Ca. Tibia'),
(2287, 'Ca. Vagina'),
(2288, 'Ca.chalangio'),
(2289, 'ca.corio'),
(2290, 'Ca.prostat'),
(2291, 'Ca.teroid'),
(2292, 'cacat bawaan'),
(2293, 'CAD/CHD (PJK)'),
(2294, 'Campak'),
(2295, 'campak/measles'),
(2296, 'candidiasis'),
(2297, 'Capul succedonum'),
(2298, 'cardioac cirosis'),
(2299, 'cardioac cirosis'),
(2300, 'cardiogenic syok'),
(2301, 'cardiomeapaty'),
(2302, 'cardiomegali'),
(2303, 'carsinoma telinga'),
(2304, 'carsinoma utery'),
(2305, 'catarac'),
(2306, 'Catarac compilated'),
(2307, 'catarac muda ( juvenil)'),
(2308, 'catarac scondary'),
(2309, 'Catarac traumatik'),
(2310, 'Catarac tua(mature)'),
(2311, 'Cedera alat dalam lainnya'),
(2312, 'Cedera intrakranial'),
(2313, 'Cedera lahir'),
(2314, 'Cedera mata dan orbita'),
(2315, 'Cedera remuk dan trauma amputasi YDT dan daerah badan multipel'),
(2316, 'Cedera YDT lainnya, YTT dan daerah badan multipel'),
(2317, 'celuitis'),
(2318, 'celulitis orbita'),
(2319, 'cepalgia'),
(2320, 'cepalhematoma bayi'),
(2321, 'cepalhematoma bayi traumatik'),
(2322, 'cepalhomatoma bayi'),
(2323, 'cerebral'),
(2324, 'cerebral palsy (CP)'),
(2325, 'cerumen'),
(2326, 'cervisal syndrome'),
(2327, 'CH (cirosis hati)'),
(2328, 'chalazion'),
(2329, 'chest pain'),
(2330, 'CHF (gagal jantung kongestif)'),
(2331, 'Chikungunya'),
(2332, 'choledocholitiasis'),
(2333, 'cholelitiasis'),
(2334, 'cholestasis'),
(2335, 'cholestasis'),
(2336, 'cholicystitis'),
(2337, 'cholicystitis acut'),
(2338, 'chondroitis'),
(2339, 'chordea'),
(2340, 'Chorea'),
(2341, 'chorio cersininoma'),
(2342, 'chusing syndrome'),
(2343, 'cicatrix'),
(2344, 'CIN ( carsinoma insitu cerviks)'),
(2345, 'ciroses cardiac'),
(2346, 'cirosis alineum cav.nasi'),
(2347, 'CKD (cronic kidny disease)'),
(2348, 'CLD'),
(2349, 'CLD'),
(2350, 'CLL'),
(2351, 'CMI'),
(2352, 'colera'),
(2353, 'colic abdomen'),
(2354, 'colic abdomen'),
(2355, 'colic ureter'),
(2356, 'colit renal ginjal'),
(2357, 'Colitis (acut)'),
(2358, 'colitis amooba'),
(2359, 'colitis ulceritiva'),
(2360, 'colitis ulkiraliv'),
(2361, 'Coll abses'),
(2362, 'colodian baby'),
(2363, 'colon post radiasi'),
(2364, 'colostomi prolaps'),
(2365, 'colostomy'),
(2366, 'coma'),
(2367, 'coma bayi'),
(2368, 'coma diabetic'),
(2369, 'coma hepaticum'),
(2370, 'coma hiperglikemik'),
(2371, 'coma hipoglikemik'),
(2372, 'coma honk ( hiper osmolarilas non ketosis)'),
(2373, 'coma uremikum'),
(2374, 'coma urine'),
(2375, 'combustio grade 10-19%'),
(2376, 'combustio grade 30-39%'),
(2377, 'combustio grade 60-69%'),
(2378, 'combustio grade 70-79%'),
(2379, 'combustio lengan'),
(2380, 'comedo'),
(2381, 'comfusi'),
(2382, 'comon bill duct (CBD)'),
(2383, 'comon colid'),
(2384, 'compresion'),
(2385, 'compressisi medula spinalis'),
(2386, 'condiloma acuminatum'),
(2387, 'Congenital centralis /PSC'),
(2388, 'conjungtivitas neunatal gonocokal'),
(2389, 'conjungtivitis'),
(2390, 'conraktur otot /leher'),
(2391, 'contifation'),
(2392, 'contractur akilla'),
(2393, 'contraktur alku kanan/elbow'),
(2394, 'contraktur jari kaki kiri'),
(2395, 'contraktur musole'),
(2396, 'contusio cerebri /CKB'),
(2397, 'contusio cerebril/CKS/CKR'),
(2398, 'contusio mata'),
(2399, 'contusio modula spinalis'),
(2400, 'contusio muscolorum'),
(2401, 'contusio otot leher'),
(2402, 'contusio penis'),
(2403, 'contusio renis'),
(2404, 'contusio torax'),
(2405, 'convulsi ( kejang)'),
(2406, 'COPD/PPOM'),
(2407, 'cor pulmunale cronic ( CPC)'),
(2408, 'corpus alienum hipoparing'),
(2409, 'Corpus Alineum Broncus'),
(2410, 'corpus alineum peluru'),
(2411, 'corpus alineumthoacal (punggung)'),
(2412, 'coxitis'),
(2413, 'CPA ( odema perut akut)'),
(2414, 'CPD'),
(2415, 'CRAO'),
(2416, 'CRF/GGK'),
(2417, 'cronic liver disease'),
(2418, 'cronic lung disiase'),
(2419, 'Croup'),
(2420, 'CRS'),
(2421, 'crush foot'),
(2422, 'crush injuri cruris'),
(2423, 'CTEV'),
(2424, 'Cuitus'),
(2425, 'curetage skin'),
(2426, 'CVA'),
(2427, 'CVA bleeding/hemorage/HS'),
(2428, 'CVA infak'),
(2429, 'CVD'),
(2430, 'CVD trombosit'),
(2431, 'cyanosis'),
(2432, 'cyatitis'),
(2433, 'cynotic CHD'),
(2434, 'cysta bartolini'),
(2435, 'cysta cebaceaus'),
(2436, 'cysta cerebrl'),
(2437, 'cysta coklat'),
(2438, 'cysta conjunctiva'),
(2439, 'cysta ductus laclimaris'),
(2440, 'cysta endometrium'),
(2441, 'cysta epidermoid'),
(2442, 'Cysta eyelld (kelopak mata)'),
(2443, 'cysta folikuler'),
(2444, 'cysta hati'),
(2445, 'cysta mama'),
(2446, 'cysta maxijja'),
(2447, 'cysta nasal(binus)'),
(2448, 'Cysta overy'),
(2449, 'cysta pancereas'),
(2450, 'cysta preauriculer'),
(2451, 'cysta radioculer'),
(2452, 'cysta retro kurikuler'),
(2453, 'cysta sarcoma'),
(2454, 'cysta sub mandibula'),
(2455, 'cysta thyrogiasus'),
(2456, 'cysta tiroid'),
(2457, 'cystocele (female)'),
(2458, 'cystocele (male)'),
(2459, 'cystocele (prolaps uteri)'),
(2460, 'dead conseptus'),
(2461, 'Decom cordis'),
(2462, 'decubitus(ulcer)'),
(2463, 'Defisiensi vitamin A'),
(2464, 'Defisiensi vitamin lainnya'),
(2465, 'Deformasi kongenital kaki'),
(2466, 'Deformasi kongenital sendi panggul'),
(2467, 'deformiti gum'),
(2468, 'dehidrasi'),
(2469, 'deloyed depelopment'),
(2470, 'deloyed movement'),
(2471, 'demam abses'),
(2472, 'Demam berdarah dengue'),
(2473, 'Demam bolak balik'),
(2474, 'Demam dengue'),
(2475, 'Demam kuning'),
(2476, 'demam rematik'),
(2477, 'Demam reumatik akut'),
(2478, 'Demam tifoid dan paratifoid'),
(2479, 'Demam tifus'),
(2480, 'demam tipoid'),
(2481, 'Demam virus dan demam berdarah virus tular serangga lainnya'),
(2482, 'Demam virus tular nyamuk'),
(2483, 'Demam yang sebabnya tidak diketahui'),
(2484, 'Demensia'),
(2485, 'dementia senlititis'),
(2486, 'dengue'),
(2487, 'Dengue fever'),
(2488, 'Deplesi volume (dehidrasi)'),
(2489, 'depresi'),
(2490, 'Derformitas tungkai didapat'),
(2491, 'Dermatitis'),
(2492, 'Dermatosis akibat kerja'),
(2493, 'Desmenorrhea'),
(2494, 'Despepsia'),
(2495, 'deviasi septuri'),
(2496, 'devicâ€™s desease'),
(2497, 'dextrocordia'),
(2498, 'DHF/DSS'),
(2499, 'Diabetes melitus bergantung insulin'),
(2500, 'Diabetes melitus berhubungan malnutrisi'),
(2501, 'Diabetes melitus dalam kehamilan'),
(2502, 'Diabetes melitus tidak bergantung insulin'),
(2503, 'Diabetes melitus YDT lainnya'),
(2504, 'Diabetes melitus YTT'),
(2505, 'Diare & gastroenteritis oleh penyebab infeksi tertentu (kolitis infeksi)'),
(2506, 'diare bayi baru lahir'),
(2507, 'diare yang ada hasil lab'),
(2508, 'diare yang tidak ada leb'),
(2509, 'diathesis hemorrhage'),
(2510, 'dibacok/ditebas/ditusuk maling'),
(2511, 'Dicederai'),
(2512, 'dicubitus ( cerviks)'),
(2513, 'diffuse axonal injury'),
(2514, 'Difteria'),
(2515, 'digigit anjing ( dogbite)'),
(2516, 'dikeroyok'),
(2517, 'Dilated cardio myopanti (DCM)'),
(2518, 'dipikul'),
(2519, 'diplopia'),
(2520, 'Dipteria'),
(2521, 'disentri amoeba'),
(2522, 'disentri basiler'),
(2523, 'diseruduk kerbau'),
(2524, 'Disfagia'),
(2525, 'disfungsi batang otak'),
(2526, 'Dislokasi'),
(2527, 'Dislokasi Ankle'),
(2528, 'Dislokasi bahu/humerus'),
(2529, 'dislokasi elbow/siku'),
(2530, 'Dislokasi HIP'),
(2531, 'Dislokasi lensa'),
(2532, 'dislokasi lutut'),
(2533, 'Dislokasi mandibula'),
(2534, 'Dislokasi panggul kiri'),
(2535, 'dislokasi TMJ'),
(2536, 'Dislokasi, terkilir, teregang YDT dan daerah badan multipel'),
(2537, 'Dispepsia'),
(2538, 'distension abdomen'),
(2539, 'Distocia'),
(2540, 'Distress pernapasan bal'),
(2541, 'distroyed lung'),
(2542, 'ditabrak mobil dari belakang sedang jalan'),
(2543, 'ditembak'),
(2544, 'diverticula meckelâ€™s'),
(2545, 'DM'),
(2546, 'DM gangren'),
(2547, 'DM Juvenil'),
(2548, 'DM nepropaty'),
(2549, 'doble hemiparese'),
(2550, 'Dorsopati lainnya'),
(2551, 'down syndrom'),
(2552, 'Drakunkuliasis'),
(2553, 'drip normal bayi'),
(2554, 'Drip normal ibu'),
(2555, 'Drowning'),
(2556, 'drug eruption'),
(2557, 'drug induce halopridal'),
(2558, 'drug intoxication'),
(2559, 'drugindiced hepatitis'),
(2560, 'DUB'),
(2561, 'Duodenitis'),
(2562, 'DVT'),
(2563, 'dysphonia'),
(2564, 'dysrhytmia'),
(2565, 'edema anasorhe'),
(2566, 'edema cerebral'),
(2567, 'edema eyelid mata'),
(2568, 'edema papil'),
(2569, 'edema paru akut'),
(2570, 'edema vulva'),
(2571, 'Edema, proteinuria dan gangguan hipertensi dalam kehamilan, persalinan dan masa nifas'),
(2572, 'EDH ( epidural hematoma)'),
(2573, 'Efek kebisingan telinga bagian dalam'),
(2574, 'Efek panas dan pencahayaan'),
(2575, 'Efek radiasi YTT'),
(2576, 'Efek samping pengguna obat, bahan obat dan bahan biologik'),
(2577, 'Efek sebab luar lainnya dan YTT pembedahan dan perawatan YTK di tempat lain'),
(2578, 'Efek tekanan udara dan tekanan air'),
(2579, 'Efek toksik bahan non medisinal lainnya'),
(2580, 'efusi pleura'),
(2581, 'Efusi pleura (empiema)'),
(2582, 'Ekinokokosis'),
(2583, 'eklampsia'),
(2584, 'Eklampsia'),
(2585, 'Ektopic cordis'),
(2586, 'elektrik shook'),
(2587, 'Emboli dan trombosis arteri'),
(2588, 'Emboli paru'),
(2589, 'emesis'),
(2590, 'empisema paru'),
(2591, 'empyema'),
(2592, 'encepalopati'),
(2593, 'endocarditia'),
(2594, 'endometnosis'),
(2595, 'Endometriosis'),
(2596, 'endometritis'),
(2597, 'endoptalmitis'),
(2598, 'ensefalitis'),
(2599, 'Ensefalitis virus'),
(2600, 'ensepalopati hepatikum'),
(2601, 'enteritis'),
(2602, 'entrocular fistula'),
(2603, 'entropia bulu-buli'),
(2604, 'entropien mata citaticial'),
(2605, 'epididmitis'),
(2606, 'epidoral hematoma'),
(2607, 'epigastro pain'),
(2608, 'epigglotitis'),
(2609, 'epilepsi'),
(2610, 'Epilepsi'),
(2611, 'Episoda depresif, gangguan depresifÂ  berulang, gangguan suasana perasaan (mood afektif) menetap, lainnya atau YTT'),
(2612, 'Episode manik dan gangguan afektif bipolar'),
(2613, 'epitaxis'),
(2614, 'epulis'),
(2615, 'erisipelas'),
(2616, 'eritodemi'),
(2617, 'erythema toxica'),
(2618, 'esopagitis'),
(2619, 'esotrapia'),
(2620, 'exanthema subitum'),
(2621, 'excoriasis'),
(2622, 'exostosis'),
(2623, 'exostusis multiple'),
(2624, 'exstra piramidal syndrom'),
(2625, 'faktur hidung/nasi'),
(2626, 'Faringitis akut'),
(2627, 'febris pueperalis'),
(2628, 'fetal bayi'),
(2629, 'fetal distress'),
(2630, 'fibro adenoma mama (FAM)'),
(2631, 'fibro myostis'),
(2632, 'fibro sarcoma'),
(2633, 'fibroma'),
(2634, 'fibroma axilla'),
(2635, 'fibroma femur'),
(2636, 'fibroma jari/pipi'),
(2637, 'fibroma kepala'),
(2638, 'fibroma osteo'),
(2639, 'fibromyalgia'),
(2640, 'fibrosis corpora cavernosa'),
(2641, 'Filariasis'),
(2642, 'fistal perianal'),
(2643, 'fistal perineum'),
(2644, 'fistal post op'),
(2645, 'fistel enterocutaneous'),
(2646, 'fistel palatum'),
(2647, 'fistel preauriculer'),
(2648, 'fistula abdomen'),
(2649, 'fistula afresia ani'),
(2650, 'fistula dada'),
(2651, 'fistula medula'),
(2652, 'fistula rectum/kelainan'),
(2653, 'fistula uretra'),
(2654, 'fistula vesico cutanens'),
(2655, 'Fistula/Kista preaurikel'),
(2656, 'flatulence'),
(2657, 'Flebitis, tromboflebitis, emboli dan trombosis vena'),
(2658, 'floating kuee'),
(2659, 'flour albus( keputihan)'),
(2660, 'flu'),
(2661, 'FPD'),
(2662, 'fr acetabulus'),
(2663, 'fr fedis'),
(2664, 'fr remus inferlor/superlor, pubis'),
(2665, 'fr zygoma'),
(2666, 'Fr. Oxygeus'),
(2667, 'fraktur alveolis'),
(2668, 'fraktur ankie'),
(2669, 'fraktur basis cranil/okipitalis'),
(2670, 'fraktur bimaleolar'),
(2671, 'fraktur calcaneus'),
(2672, 'fraktur cervical'),
(2673, 'fraktur clavicula'),
(2674, 'fraktur clavicula close'),
(2675, 'fraktur colles'),
(2676, 'fraktur comperesion'),
(2677, 'fraktur cosial/coxle'),
(2678, 'fraktur costal/coxle open'),
(2679, 'fraktur cruris distal'),
(2680, 'fraktur elbow'),
(2681, 'fraktur femur'),
(2682, 'fraktur fibula'),
(2683, 'fraktur frontalis/pariental'),
(2684, 'fraktur humarius'),
(2685, 'fraktur humarius open'),
(2686, 'Fraktur leher, toraks atau panggul'),
(2687, 'fraktur lumbar/l2'),
(2688, 'fraktur maleolus'),
(2689, 'fraktur maluncin'),
(2690, 'fraktur mandibula'),
(2691, 'fraktur matacarpai'),
(2692, 'fraktur maxilla'),
(2693, 'Fraktur meliputi daerah badan multipel'),
(2694, 'fraktur metatarual'),
(2695, 'fraktur montigia'),
(2696, 'fraktur multiple'),
(2697, 'fraktur okanon'),
(2698, 'fraktur os pubis'),
(2699, 'Fraktur paha'),
(2700, 'fraktur patella /genu'),
(2701, 'fraktur pelvis'),
(2702, 'fraktur phalink'),
(2703, 'fraktur radius antebrichis'),
(2704, 'fraktur rib lga'),
(2705, 'fraktur scapula'),
(2706, 'fraktur sinithis'),
(2707, 'fraktur talus'),
(2708, 'fraktur temporal'),
(2709, 'Fraktur tengkorak dan tulang muka'),
(2710, 'fraktur tibia'),
(2711, 'fraktur trocanta'),
(2712, 'Fraktur tulang anggota gerak lainnya'),
(2713, 'fraktur ulna'),
(2714, 'fraktur vetebrata'),
(2715, 'fraktur weber'),
(2716, 'fraktur wist'),
(2717, 'fuo'),
(2718, 'furunkel telinga'),
(2719, 'Gagal ginjal akut akibat asam jengkol'),
(2720, 'Gagal ginjal lainnya'),
(2721, 'gagal jantung'),
(2722, 'Gagal jantung'),
(2723, 'gagal napas'),
(2724, 'Gagal napas'),
(2725, 'galactocele'),
(2726, 'Gangguan anxietas fobik, gangguan anxietas lainnya'),
(2727, 'Gangguan badan kaca dan bola mata'),
(2728, 'gangguan belajar'),
(2729, 'Gangguan bukan radang pada indung telur, saluran telur dan ligamentum latum'),
(2730, 'Gangguan dalam masa menopause dan perime nopause lainnya'),
(2731, 'Gangguan daya dengar'),
(2732, 'Gangguan daya lihat'),
(2733, 'Gangguan diskus servikal dan intervertebral lainnya'),
(2734, 'Gangguan disosiatif [konversi]'),
(2735, 'Gangguan endokrin, nutrisi dan metabolik lainnya'),
(2736, 'Gangguan gerakanÂ  berulang-ulang dengan kekuatan berlebih'),
(2737, 'Gangguan haid Lainnya'),
(2738, 'Gangguan hantaran dan aritmia jantung'),
(2739, 'Gangguan hiperkinetik, perilaku, emosional atau fungsi sosial khas, gangguan â€œticâ€, dan gangguan mental dan emosional lainnya'),
(2740, 'Gangguan jaringan ikat sistemik lainnya'),
(2741, 'Gangguan jaringan lunak akibat yang berhubunganÂ  dengan penggunaan tekanan berlebihan'),
(2742, 'Gangguan jaringan lunak lainnya'),
(2743, 'Gangguan jiwa YTT'),
(2744, 'Gangguan kelenjar tiroid lainnya'),
(2745, 'Gangguan kepribadian, gangguan kebiasaan dan impuls, gangguan identitas, gangguan prevensi seksual'),
(2746, 'Gangguan kesehatan yang berhubungan dengan'),
(2747, 'Gangguan koroid dan korioretina'),
(2748, 'Gangguan lain gerakan mata binokular'),
(2749, 'Gangguan lain kelopak mata'),
(2750, 'Gangguan lain retina'),
(2751, 'Gangguan mental dan perilaku akibat penggunaan Alkohol'),
(2752, 'Gangguan mental dan perilaku akibat penggunaan Halosinogenika'),
(2753, 'Gangguan mental dan perilaku akibat penggunaan Kanabinoida'),
(2754, 'Gangguan mental dan perilaku akibat penggunaan Kokain'),
(2755, 'Gangguan mental dan perilaku akibat penggunaan Opioida'),
(2756, 'Gangguan mental dan perilaku akibat penggunaan Sedativa atau Hipnotika'),
(2757, 'Gangguan mental dan perilaku akibat penggunaan Stimulansia'),
(2758, 'Gangguan mental dan perilaku akibat penggunaan Tembakau'),
(2759, 'Gangguan mental dan perilaku akibat zat pelarut yang mudah menguap atau zat multipel dan zat psikoaktif lainnya'),
(2760, 'Gangguan obsesif â€“ kompulsif'),
(2761, 'Gangguan pada payudara'),
(2762, 'Gangguan perkembangan dan erupsi gigi termasuk impaksi'),
(2763, 'Gangguan perkembangan psikologis'),
(2764, 'Gangguan pernapasan akibat menghirup zat kimia, gas, asap dan uap'),
(2765, 'Gangguan prostat lainnya'),
(2766, 'Gangguan psikotik nonorganik lainnya atau YTT'),
(2767, 'Gangguan refraksi dan akomodasi'),
(2768, 'Gangguan saluran napas lainnya yang ber-hubungan dengan masa perinatal'),
(2769, 'Gangguan saraf optik dan saraf penglihatan'),
(2770, 'Gangguan saraf, radiks dan pleksus saraf'),
(2771, 'Gangguan serangan peredaran otak sepintas dan sindrom yang terkait'),
(2772, 'Gangguan sistem kemih kelamin lainnya'),
(2773, 'Gangguan sistem lakrimal dan orbita'),
(2774, 'Gangguan skizoafektif'),
(2775, 'Gangguan stress pasca trauma'),
(2776, 'Gangguan struktur dan densitas tulang'),
(2777, 'Gangguan tiroid berhubungan dengan defisiensiÂ  iodium'),
(2778, 'Gangguan waham menetap dan induksi'),
(2779, 'ganglion'),
(2780, 'gangren pulpa( GP)'),
(2781, 'gangren radix (GR)'),
(2782, 'gangrene'),
(2783, 'gaster porforasi'),
(2784, 'gastri ulcer'),
(2785, 'gastritis'),
(2786, 'gastritis acut'),
(2787, 'gastritis alcoholik'),
(2788, 'gastritis alergi'),
(2789, 'gastritis chronik'),
(2790, 'Gastritis dan duodenitis'),
(2791, 'gastro duodenitis'),
(2792, 'gastro schizis'),
(2793, 'gawat janin'),
(2794, 'GBS'),
(2795, 'GE'),
(2796, 'Gejala pada jantung'),
(2797, 'Gejala sisa cedera, keracunan dan akibat lanjut sebab luar'),
(2798, 'Gejala sisa malnutrisi dan defisiensi gizi lainnya'),
(2799, 'Gejala, tanda dan penemuan klinik dan laboratorium tidak normal lainnya, YTK di tempat lain'),
(2800, 'gemeli'),
(2801, 'GGA'),
(2802, 'GGK/GNC'),
(2803, 'ginggivitis'),
(2804, 'gipastrik pain'),
(2805, 'glant cell femur'),
(2806, 'glaucoma congenital'),
(2807, 'glaucoma kronik'),
(2808, 'glaucoma sekunder'),
(2809, 'Glaukoma'),
(2810, 'glaukoma acut'),
(2811, 'glomerulo nepritis kronis'),
(2812, 'GNA( gromeruloneprritis acut)'),
(2813, 'GNAPS ( glomerulonepritis acut post streptococos)'),
(2814, 'Gondong'),
(2815, 'gonitis'),
(2816, 'gonorrhea'),
(2817, 'gout ( urat)'),
(2818, 'gout artritis'),
(2819, 'grande multipara'),
(2820, 'granuloma'),
(2821, 'granuloma hidung'),
(2822, 'granuloma mata'),
(2823, 'granuloma telinga'),
(2824, 'granuloma umbilicus'),
(2825, 'graveâ€s desease'),
(2826, 'gusi berdarah'),
(2827, 'gynecomastia'),
(2828, 'gyneko ekologi'),
(2829, 'hallux valgus'),
(2830, 'hallux valgus congenital'),
(2831, 'hamil + hipertensi'),
(2832, 'hamil ectopic'),
(2833, 'hamil kurang dari 37 mg'),
(2834, 'hamil muda'),
(2835, 'hamil normal'),
(2836, 'hamil+ anemia'),
(2837, 'Hasil laboratorium positif HIV'),
(2838, 'headache'),
(2839, 'heat struke'),
(2840, 'Helmintiasis lain'),
(2841, 'hema insisionalis'),
(2842, 'hemangioma'),
(2843, 'hemangioma sarcoma'),
(2844, 'hemaptoe'),
(2845, 'hematemasis'),
(2846, 'hematematis graviderum'),
(2847, 'hemato bayi'),
(2848, 'hemato pnemo thorax'),
(2849, 'hemato traumatik'),
(2850, 'hematocyluria'),
(2851, 'hematoma'),
(2852, 'hematoma dahi kiri'),
(2853, 'hematoma labia'),
(2854, 'hematoma subdural'),
(2855, 'hematoma testis'),
(2856, 'hematoma vagina'),
(2857, 'hematoma vulva'),
(2858, 'hematomegali'),
(2859, 'hematometra'),
(2860, 'hematuria'),
(2861, 'hemiparesis'),
(2862, 'hemongioma capilary'),
(2863, 'hemopili'),
(2864, 'hemorage intra ocular'),
(2865, 'hemorage intra of newbron'),
(2866, 'HEMORHAGE'),
(2867, 'hemorhage conjupctiva'),
(2868, 'hemoroid'),
(2869, 'hemoroid external'),
(2870, 'hemoroid interna'),
(2871, 'Hemoroid/Wasir'),
(2872, 'henmatocal'),
(2873, 'henoch schonlein purpura (HSP)'),
(2874, 'hepatik fallure'),
(2875, 'hepatitis'),
(2876, 'hepatitis A'),
(2877, 'Hepatitis A akut'),
(2878, 'hepatitis acut'),
(2879, 'hepatitis B akut'),
(2880, 'Hepatitis B akut'),
(2881, 'Hepatitis C akut'),
(2882, 'hepatitis C cronis'),
(2883, 'Hepatitis E akut'),
(2884, 'hepatitis fulminaat'),
(2885, 'hepatitis kronik'),
(2886, 'Hepatitis kronik'),
(2887, 'hepatitis neunatal'),
(2888, 'hepatitis virus akut'),
(2889, 'hepatitis virus B'),
(2890, 'Hepatitis virus lainnya'),
(2891, 'hepato renal syndrom'),
(2892, 'hepatoma'),
(2893, 'hepatos plenomegali'),
(2894, 'heperurisemia'),
(2895, 'hepotensi'),
(2896, 'hermoprodite'),
(2897, 'hernia'),
(2898, 'hernia eoigastric/ventral'),
(2899, 'hernia femoral'),
(2900, 'Hernia inguinal'),
(2901, 'hernia insisional'),
(2902, 'Hernia lainnya'),
(2903, 'hernia medialis'),
(2904, 'hernia umbicollis'),
(2905, 'herpes facialis'),
(2906, 'herpes simpleks'),
(2907, 'herpes zooster'),
(2908, 'HHD'),
(2909, 'hiccup'),
(2910, 'Hidramnion'),
(2911, 'hidrocelle'),
(2912, 'hidrocelle testis dextra'),
(2913, 'hidrocepalus'),
(2914, 'hidrocepalus bayi'),
(2915, 'Hidrokel dan spermatokel'),
(2916, 'hidrom neos bayi'),
(2917, 'hidromnios'),
(2918, 'hidroneorosis'),
(2919, 'hidrops'),
(2920, 'Hidrosefalus kongenital'),
(2921, 'HIE ( hipoxic ischemic ensialopaty)'),
(2922, 'hifopermia'),
(2923, 'higroma ( colli d Cystioa)'),
(2924, 'HIL /scrotalis/inguinalis'),
(2925, 'hipaglikemia bayi'),
(2926, 'hipalbumenimia'),
(2927, 'hipema'),
(2928, 'hipema traumatic'),
(2929, 'hiper billirubimania'),
(2930, 'hiper cholestrol'),
(2931, 'hiperactive exercise'),
(2932, 'hipercolestrolemia'),
(2933, 'hiperemia pulpa HP'),
(2934, 'hipergilikemia'),
(2935, 'hiperpirakia'),
(2936, 'Hiperplasia prostat'),
(2937, 'hipertensi ensepalopaty'),
(2938, 'Hipertensi esensial (primer)'),
(2939, 'Hipertensi gestasional (akibat kehamilan)dengan proteinuria yang nyata/preeklamsia'),
(2940, 'Hipertensi portal'),
(2941, 'hipertiroid'),
(2942, 'hipertrapi scar'),
(2943, 'hipertropiÂ  prostat'),
(2944, 'hipertropi pilory stenosis'),
(2945, 'hipoglikemia'),
(2946, 'Hipoksia intrauterus dan asfiksia lahir'),
(2947, 'hipospadia'),
(2948, 'hipospadia penoscrotal'),
(2949, 'hipotiroid'),
(2950, 'Hipotiroidisme lain'),
(2951, 'hipovolamik syok'),
(2952, 'hipoxia bayi'),
(2953, 'hischpruag'),
(2954, 'histeria'),
(2955, 'HIV'),
(2956, 'HOCM hipertensi oostruktif cardiomyopati'),
(2957, 'hodkin disease'),
(2958, 'hona,foot dan mouth disease ( HFMD)'),
(2959, 'HONK'),
(2960, 'hordeolum'),
(2961, 'HPP'),
(2962, 'hyper menorea'),
(2963, 'hyperthiroid'),
(2964, 'ICH multiple'),
(2965, 'icterus'),
(2966, 'icterus neonatorum'),
(2967, 'IHD'),
(2968, 'ileus'),
(2969, 'ileus paralitik'),
(2970, 'Ileus paralitik dan obstruksi usus tanpa Hernia'),
(2971, 'ilius obstruktif'),
(2972, 'imark miokard'),
(2973, 'Imperforata hymen (blum pernah hamil)'),
(2974, 'impetigo bulose'),
(2975, 'impotensi dini'),
(2976, 'impressi fr.os frontal'),
(2977, 'Imunisasi BCG'),
(2978, 'Imunisasi campak'),
(2979, 'Imunisasi dan kemoterapi pencegahan lainnya'),
(2980, 'Imunisasi gabungan DPT (Difteri, Pertusis, Tetanus)'),
(2981, 'Imunisasi hepatitis virus'),
(2982, 'Imunisasi poliomielitis'),
(2983, 'Imunisasi rabies'),
(2984, 'Imunisasi tetanus'),
(2985, 'Infantil cerebral palsy'),
(2986, 'Infark miokard akut'),
(2987, 'Infark serebral'),
(2988, 'infeksi bronohitis'),
(2989, 'infeksi gigi'),
(2990, 'infeksi gigi'),
(2991, 'infeksi gonocolle'),
(2992, 'Infeksi gonokok'),
(2993, 'Infeksi herpesvirus (Herpes simpleks)'),
(2994, 'Infeksi khusus lainnya pada masa perinatal'),
(2995, 'Infeksi Klamedia'),
(2996, 'Infeksi kulit dan jaringan subkutan'),
(2997, 'Infeksi lainnya yang terutama ditularkan melalui hubungan seksual'),
(2998, 'infeksi luka oprasi (ILO)'),
(2999, 'Infeksi meningokok'),
(3000, 'infeksi meninokok'),
(3001, 'infeksi neunatal'),
(3002, 'infeksi neunatrium'),
(3003, 'infeksi puerferalis'),
(3004, 'infeksi renal chronis'),
(3005, 'Infeksi saluran napas bagian atas akut lainnya'),
(3006, 'Infeksi trematoda lainnya'),
(3007, 'infeksi umbilicus'),
(3008, 'infertality'),
(3009, 'Infertilitas perempuan'),
(3010, 'infiltrat parotis'),
(3011, 'Influensa'),
(3012, 'injury'),
(3013, 'inpartu'),
(3014, 'insect bite'),
(3015, 'insect bite'),
(3016, 'insomnia'),
(3017, 'insufisiensi renal GGK'),
(3018, 'inta cerebral bleding'),
(3019, 'intake makanan'),
(3020, 'interstitial lung oedema'),
(3021, 'interusi gigi'),
(3022, 'intocikasi bodrex'),
(3023, 'intolorance food'),
(3024, 'intosikasi racun serangga'),
(3025, 'intosikasi susu'),
(3026, 'intosikesi'),
(3027, 'intoxcisasi CTM'),
(3028, 'intoxcisasi jamur'),
(3029, 'intoxicasi bayigon'),
(3030, 'intoxicasi bensin'),
(3031, 'intoxicasi deterjen'),
(3032, 'intoxicasi kerosin'),
(3033, 'intoxicasi obat'),
(3034, 'intoxicasi racun tikus'),
(3035, 'intra cranial bleeding'),
(3036, 'intra cranial bleeding non traumatik'),
(3037, 'intra cranial bleeding traumatik'),
(3038, 'invaginasi'),
(3039, 'inversio uteri'),
(3040, 'inversio uteri post fartum'),
(3041, 'inverte papiloma cav.nasi'),
(3042, 'invertigo'),
(3043, 'Iridosiklitis dan gangguan lain iris dan badan silier'),
(3044, 'iritasi pulpa'),
(3045, 'ischemik'),
(3046, 'ischialgia'),
(3047, 'ISK'),
(3048, 'ISPA'),
(3049, 'ITP'),
(3050, 'IUD'),
(3051, 'IUFD ( KJDR)'),
(3052, 'IUFD ( KJDR)bayi'),
(3053, 'J'),
(3054, 'jalan kaki ditabrak mobil'),
(3055, 'jalan kaki ditabrak motor'),
(3056, 'Janin dan bayi baru lahir yang dipengaruhi oleh faktor dan penyulit kehamilan persalinan dan kelahiran'),
(3057, 'jantung kroner'),
(3058, 'jantung rematik'),
(3059, 'jatuh'),
(3060, 'Jatuh'),
(3061, 'jatuh dari cidomo'),
(3062, 'jatuh dari kamar mandi'),
(3063, 'jatuh dari korsi'),
(3064, 'jatuh dari mobil di jalan raya'),
(3065, 'jatuh dari motor'),
(3066, 'jatuh dari pohon'),
(3067, 'jatuh dari rumah /bangunan'),
(3068, 'jatuh dari sepeda'),
(3069, 'jatuh dari tangga'),
(3070, 'jatuh dari tempat tidur'),
(3071, 'jatuh dari truck'),
(3072, 'jatuh dibawah'),
(3073, 'jatuh disekolah sox ditabrak teman'),
(3074, 'jatuh kesumur'),
(3075, 'jatuh terguling dari mobil'),
(3076, 'KAD (koma asidosis diabetic)'),
(3077, 'kaki masuk jeruji motor'),
(3078, 'kala I'),
(3079, 'Kala II'),
(3080, 'Kardiomiopati'),
(3081, 'Karies gigi'),
(3082, 'karies propunda'),
(3083, 'Karsinoma in situ kulit'),
(3084, 'Karsinoma in situ lainnya'),
(3085, 'Karsinoma in situ payudara'),
(3086, 'Karsinoma in situ serviks uterus'),
(3087, 'Katarak dan gangguan lain lensa'),
(3088, 'KB suntik'),
(3089, 'KCCL'),
(3090, 'Keadaan infeksi HIV asimtomatik'),
(3091, 'kebekeran rumah'),
(3092, 'Kecelakaan angkutan air'),
(3093, 'Kecelakaan angkutan darat'),
(3094, 'Kecelakaan angkutan lain'),
(3095, 'Kecelakaan angkutan udara dan ruang angkasa'),
(3096, 'Kecelakaan keracunan dan terdedah oleh bahan beracun lainnya'),
(3097, 'Kecelakaan tenggelam dan terbenam'),
(3098, 'kedangnitis'),
(3099, 'kehamilan abdominal'),
(3100, 'Kehamilan ektopik'),
(3101, 'Kehamilan lain yang berakhir dengan abortus'),
(3102, 'kehamilan lewat waktu'),
(3103, 'Kehamilan lewat waktu'),
(3104, 'Kehamilan multipel'),
(3105, 'kejang'),
(3106, 'kejang demam'),
(3107, 'Kejang YTT'),
(3108, 'kejatuhan benda'),
(3109, 'Kelainan dentofasial termasuk maloklusi'),
(3110, 'Kelainan kromosom YTK ditempat lain'),
(3111, 'Kelainan sendi lainnya'),
(3112, 'keloid'),
(3113, 'kemasukan biji di telingga'),
(3114, 'Kembar siam'),
(3115, 'kembung'),
(3116, 'kena air panas'),
(3117, 'kena gelas/kaca'),
(3118, 'kena jarum'),
(3119, 'kena kapak'),
(3120, 'kena kawat/besi'),
(3121, 'kena kayu'),
(3122, 'kena lempar buku'),
(3123, 'kena mesin giling'),
(3124, 'kena minyak panas'),
(3125, 'kena paku'),
(3126, 'kena pancing'),
(3127, 'kena peluru nyasar'),
(3128, 'kena pisau/pedang'),
(3129, 'kena ranting pohon'),
(3130, 'kena tembak'),
(3131, 'KEP'),
(3132, 'Keracunan akibat pemaparan alkohol'),
(3133, 'Keracunan akibat pemaparan bahan beracun berbahaya lainnya'),
(3134, 'Keracunan akibat pemaparan gas-gas & uap-uap lainnya'),
(3135, 'Keracunan akibat pemaparan pelarut organik & hidrokarbon serta uapnya'),
(3136, 'Keracunan akibat pemaparan pestisida'),
(3137, 'Keracunan gas, asap dan uap lain'),
(3138, 'Keracunan logam'),
(3139, 'Keracunan obat dan preparat biologik'),
(3140, 'Keracunan pelarut organik'),
(3141, 'Keracunan pestisida'),
(3142, 'Keratitis'),
(3143, 'Keratitis dan gangguan lain sklera dan kornea'),
(3144, 'kerato uvcitis'),
(3145, 'kern icterus'),
(3146, 'Kesalahan pada pasien selama perawatan medis non bedah'),
(3147, 'kestrum'),
(3148, 'KET'),
(3149, 'Ketuban pecah dini'),
(3150, 'Khitanan menurut agama dan adat kebiasaan'),
(3151, 'KIPI (komplikasi ikutan pasca imuisasi)'),
(3152, 'kista cengenital'),
(3153, 'Kista dan abses kelenjar Bartholin'),
(3154, 'kista mesenterial'),
(3155, 'kista orbit'),
(3156, 'kista ovarli (beraslin)'),
(3157, 'kista parovarium'),
(3158, 'kista radicular'),
(3159, 'Kista rongga mulut dan penyakit pada rahang'),
(3160, 'kista umbilicoli'),
(3161, 'kistoma ovaril'),
(3162, 'KLL'),
(3163, 'Kolelitiasis'),
(3164, 'kolera'),
(3165, 'Kolera'),
(3166, 'Kolesistitis'),
(3167, 'Koma hepatikum dan hepatitis fulminan'),
(3168, 'kompor meledak /kena api kompor'),
(3169, 'kompressi medulla'),
(3170, 'Kondisi hemoragik dan penyakit darah dan organ pembuat darah lainnya'),
(3171, 'Kondisi lain yang bermula pada masa Perinatal'),
(3172, 'Konjungtivitis dan gangguan lain konjungtiva'),
(3173, 'konka hipertrofi'),
(3174, 'Kontak dengan bahan panas'),
(3175, 'Kontak dengan binatang & tumbuhan beracun'),
(3176, 'kontraktur jari'),
(3177, 'KP'),
(3178, 'KP lama'),
(3179, 'KPD'),
(3180, 'kwarsiakor'),
(3181, 'labio genato suzies'),
(3182, 'labio mayora'),
(3183, 'labio palato baizies'),
(3184, 'lacerasi anus'),
(3185, 'lacerasi eye/cornea tampaprolapsa'),
(3186, 'lacerasi vulva'),
(3187, 'laceratum'),
(3188, 'lagophitalmoes'),
(3189, 'Lahir mati'),
(3190, 'laringeal web'),
(3191, 'laringitis akut'),
(3192, 'laringitis cronik'),
(3193, 'Laringitis dan trakeitis akut'),
(3194, 'laringo malacea/plagin'),
(3195, 'laringo paringitis acut'),
(3196, 'lecerasi cerebri'),
(3197, 'ledakan tabung gas'),
(3198, 'left heard failure LHF'),
(3199, 'Leiomioma uterus'),
(3200, 'Lepra/Kusta'),
(3201, 'Lesi saraf radialis'),
(3202, 'Lesi saraf ulnaris'),
(3203, 'Lesmaniasis'),
(3204, 'letak lintang anak'),
(3205, 'letak lintang ibu'),
(3206, 'letak lintang kasep anak'),
(3207, 'letak lintang kasiep ibu'),
(3208, 'Letak muka'),
(3209, 'letak sunsang ( ibu)'),
(3210, 'letak sunsang anak'),
(3211, 'leucoma cornea'),
(3212, 'Leukemia'),
(3213, 'leukemia acut'),
(3214, 'leukemia comea'),
(3215, 'lever ambic abses'),
(3216, 'lever amebic abses'),
(3217, 'leymyosarcoma'),
(3218, 'Limfadenitis tuberkulosa'),
(3219, 'Limfoma non Hodgkin'),
(3220, 'limpoma no hodgkins'),
(3221, 'limpomamalignah'),
(3222, 'lipoma'),
(3223, 'lipoma neohal'),
(3224, 'lipoma retraurculer'),
(3225, 'liver cronic'),
(3226, 'liver cronis disease'),
(3227, 'lodwing angina'),
(3228, 'loose body patela (knee)'),
(3229, 'Luka bakar dan korosi'),
(3230, 'luka empeksi'),
(3231, 'lumbago ( LBP) /low back pain'),
(3232, 'lupa CNS'),
(3233, 'Lupus eritemateus sistemik'),
(3234, 'LVH cardiomegali'),
(3235, 'lympadenitis'),
(3236, 'lympadenopaty'),
(3237, 'lympadenpaty sup mandibula'),
(3238, 'lympadepaty colli'),
(3239, 'lympengioma'),
(3240, 'lympo sarcoma'),
(3241, 'macrostamia'),
(3242, 'mal oclussion'),
(3243, 'Malaria (Included all malaria)'),
(3244, 'malaria cerebral'),
(3245, 'malaria cerebral klinis /demam'),
(3246, 'malaria falciferum/tropical/algida'),
(3247, 'malaria ovaie'),
(3248, 'malaria quartana'),
(3249, 'malaria vivak /tertiana'),
(3250, 'Malformasi dan deformasi kongenital sistem muskuloskeletal lain'),
(3251, 'Malformasi kongenital alat kelamin laki'),
(3252, 'Malformasi kongenital alat kelamin wanita'),
(3253, 'Malformasi kongenital lainnya'),
(3254, 'Malformasi kongenital sistem cerna lainnya'),
(3255, 'Malformasi kongenital sistem kemih lainnya'),
(3256, 'Malformasi kongenital sistem peredaran darah'),
(3257, 'Malformasi kongenital susunan saraf lain'),
(3258, 'malignancy lutut'),
(3259, 'malnutrisi'),
(3260, 'Malnutrisi'),
(3261, 'malrotasi'),
(3262, 'malunion'),
(3263, 'mama alberant'),
(3264, 'marasmus'),
(3265, 'marasmus kwarsi'),
(3266, 'marnae diplasia'),
(3267, 'massa colon'),
(3268, 'mastititis abses'),
(3269, 'mastoiditis'),
(3270, 'mastopati'),
(3271, 'masuk lintah'),
(3272, 'medulo blastoma'),
(3273, 'mega colon'),
(3274, 'mega colon congenital'),
(3275, 'megacolon congenital'),
(3276, 'meiges syndrom'),
(3277, 'Melanoma ganas kulit'),
(3278, 'melena bayi'),
(3279, 'melena dewasa'),
(3280, 'melenoma malignen'),
(3281, 'mellery weis syndrom'),
(3282, 'menabrak dinding'),
(3283, 'menabrak pohon'),
(3284, 'menelan uang logam'),
(3285, 'menengitis'),
(3286, 'meningitis TBC'),
(3287, 'Meningitis tuberkulosa'),
(3288, 'meningo ensafalitis'),
(3289, 'meningo ensefalocelle'),
(3290, 'meningo gasepalitis TB'),
(3291, 'meningocelle'),
(3292, 'menometroragia'),
(3293, 'menopause'),
(3294, 'menoraghia'),
(3295, 'Menoragi atau metroragi'),
(3296, 'menstruasi'),
(3297, 'mental retardation'),
(3298, 'menunggu bayi'),
(3299, 'Mesotelioma'),
(3300, 'Metahaemoglobinema'),
(3301, 'metastase glutea CA'),
(3302, 'metastase intra cranial'),
(3303, 'meteorismus ( perut kembung)'),
(3304, 'micro urethra conginital'),
(3305, 'microcepally'),
(3306, 'migren'),
(3307, 'Migren dan sindrom nyeri kepala lainnya'),
(3308, 'Mikosis'),
(3309, 'miningitis prulent /bacterial'),
(3310, 'Miopati dan reumatisme'),
(3311, 'mised abortion/dead concytens'),
(3312, 'missing teeth'),
(3313, 'mitra valve prolapa'),
(3314, 'mitral insufiensi'),
(3315, 'mitral stenosis'),
(3316, 'mnemonia berat'),
(3317, 'Mola hidatidosa'),
(3318, 'mola hidatodosa'),
(3319, 'moluscum contagiosum'),
(3320, 'moluscum contagiosum mata'),
(3321, 'monoliasis'),
(3322, 'monoliasis bayi'),
(3323, 'Mononeuropati anggota tubuh bagian atas lainnya'),
(3324, 'monoparase extrimitas'),
(3325, 'morbili'),
(3326, 'morbus harsan fieaksi'),
(3327, 'motion sicknese'),
(3328, 'MR ( mitral regorgitasi)'),
(3329, 'mulitple cranial palsy'),
(3330, 'multipara'),
(3331, 'multiple cerebri'),
(3332, 'multiple conginital anomaly'),
(3333, 'multiple contusio muscolorum'),
(3334, 'multiple exostosis'),
(3335, 'multiple fibroma colorsum'),
(3336, 'multiple hordeulum'),
(3337, 'multiple polip senile'),
(3338, 'myalgia'),
(3339, 'myastenia gravis'),
(3340, 'myastenia gravis bayi'),
(3341, 'mycosis mycotic'),
(3342, 'myelenopritis'),
(3343, 'myelitis'),
(3344, 'myelofibrosis'),
(3345, 'myocardial infection MCI'),
(3346, 'myocarditis'),
(3347, 'myoma uteri'),
(3348, 'myopia'),
(3349, 'myosercoma betis kiri'),
(3350, 'myositis'),
(3351, 'N'),
(3352, 'naevus pigmentasi'),
(3353, 'necrasis palax /brachl'),
(3354, 'necrosis'),
(3355, 'Nefritis tubulo â€“ interstitial, tidak ditentukan akut atau kronik/pielonefritis'),
(3356, 'Nefropati disebabkan oleh logamâ€“logam berat'),
(3357, 'Nefropati Imunoglobulin A (Ig A)'),
(3358, 'Neoplasma ganasÂ  sistem napas dan alatÂ  rongga dada lainnya'),
(3359, 'Neoplasma ganas alat kelaminÂ  perempuan lainnya'),
(3360, 'Neoplasma ganas alat kelamin pria lainnya'),
(3361, 'Neoplasma ganas alat kemih lainnya'),
(3362, 'Neoplasma ganas bagian susunan saraf pusat'),
(3363, 'Neoplasma ganas bagian uterus lainnya dan YTT'),
(3364, 'Neoplasma ganas bibir, rongga mulut,Â  kelenjar liur, faring, tonsil'),
(3365, 'Neoplasma ganas bibir, rongga mulut, faring, lainnya & YTT'),
(3366, 'Neoplasma ganas bronkus dan paru'),
(3367, 'Neoplasma ganas daerahÂ  rektosigmoid, rektum dan anus'),
(3368, 'Neoplasma ganas esofagus'),
(3369, 'Neoplasma ganas ginjal, pelvis ginjal'),
(3370, 'Neoplasma ganas hati dan saluran empedu intrahepatik'),
(3371, 'Neoplasma ganas jaringan ikat & jaringan lunak'),
(3372, 'Neoplasma ganas kandung kemih (buli-buli)'),
(3373, 'Neoplasma ganas kelenjar endokrin lain dan struktur terkait'),
(3374, 'Neoplasma ganas kelenjar tiroid'),
(3375, 'Neoplasma ganas kolon'),
(3376, 'Neoplasma ganas korpus uteri'),
(3377, 'Neoplasma ganas kulit lainnya'),
(3378, 'Neoplasma ganas lain dari limfoid, hematopoetik dan jaringan terkait lainnya'),
(3379, 'Neoplasma ganas lambung'),
(3380, 'Neoplasma ganas laring'),
(3381, 'Neoplasma ganas mata danÂ  adneksa'),
(3382, 'Neoplasma ganas mediastinum'),
(3383, 'Neoplasma ganas nasofaring'),
(3384, 'Neoplasma ganas otak'),
(3385, 'Neoplasma ganas ovarium (indung telur)'),
(3386, 'Neoplasma ganas pankreas'),
(3387, 'Neoplasma ganas payudara'),
(3388, 'Neoplasma ganas penis'),
(3389, 'Neoplasma ganas plasenta (uri)'),
(3390, 'Neoplasma ganas primer tempat multipel'),
(3391, 'Neoplasma ganas prostat'),
(3392, 'Neoplasma ganas sekunder dan neoplasma ganas kelenjar getah bening YTT'),
(3393, 'Neoplasma ganas serviks uterus'),
(3394, 'Neoplasma ganas tempat lain dan yang tidak jelas batasannya'),
(3395, 'Neoplasma ganas testis'),
(3396, 'Neoplasma ganas trakea'),
(3397, 'Neoplasma ganas tulang dan tulang rawan sendi'),
(3398, 'Neoplasma ganas usus halus dan alat cerna lainnya'),
(3399, 'Neoplasma jinak alat kemih'),
(3400, 'Neoplasma jinak kulit'),
(3401, 'Neoplasma jinak lainnya'),
(3402, 'Neoplasma jinak mediastinum'),
(3403, 'Neoplasma jinak otak dan susunan saraf pusat lainnya'),
(3404, 'Neoplasma jinak ovarium (indung telur)'),
(3405, 'Neoplasma jinak payudara'),
(3406, 'Neoplasma jinak sistem napas lainnya'),
(3407, 'Neoplasma yang tak menentu perangainya dan yang tak diketahui sifatnya'),
(3408, 'nephro calcinosis'),
(3409, 'nepratio sindrom'),
(3410, 'nepritis'),
(3411, 'neprolitiasis'),
(3412, 'nepropati diabetik'),
(3413, 'neuralgia'),
(3414, 'neurastania'),
(3415, 'neuritis optic'),
(3416, 'neuritis retro bulbar'),
(3417, 'neuro chorioretiasis'),
(3418, 'neuro fibromatosis'),
(3419, 'neuro panic'),
(3420, 'neuropaty'),
(3421, 'neus post histerectomy'),
(3422, 'NHL'),
(3423, 'NHS ( non hemorage stroke)'),
(3424, 'Nistagmus & pergerakan mata yang tidak teratur lainnya'),
(3425, 'noma'),
(3426, 'non union fraktur'),
(3427, 'nyeri dada'),
(3428, 'Nyeri perut dan panggul'),
(3429, 'nyeri pinggang'),
(3430, 'Nyeri punggung bawah'),
(3431, 'O'),
(3432, 'Obesitas'),
(3433, 'obesitas /overweleh'),
(3434, 'OBS febris'),
(3435, 'obstipasi'),
(3436, 'obstruksi anus ( akut bawan bayi)'),
(3437, 'obstruksi nasi'),
(3438, 'obstruksi parsial'),
(3439, 'obstruksi uropati'),
(3440, 'obstruksi usus'),
(3441, 'obstruktif sundice'),
(3442, 'oclosio arteri retina sentral'),
(3443, 'old myocard infaction ( OMI)'),
(3444, 'oligohidramnion'),
(3445, 'OMP'),
(3446, 'ompalitis'),
(3447, 'ompalocelle'),
(3448, 'Onkosersiasis'),
(3449, 'open fr cruris'),
(3450, 'open wound prut'),
(3451, 'open wourd abdomen wall'),
(3452, 'open wourd knee'),
(3453, 'open wourd tigh paha'),
(3454, 'opthalmopalgia'),
(3455, 'oral trush'),
(3456, 'Orang lain dengan risiko gangguan kesehatan yang berkaitan dengan penyakit menular'),
(3457, 'Orang yang mendapatkan pelayanan kesehatan untuk pemeriksaan khusus dan investigasi lainnya'),
(3458, 'Orang yang mengunjungi pelayanan kesehatan untuk tindakan perawatan khusus lainnya'),
(3459, 'orbital celluitis'),
(3460, 'orchitis'),
(3461, 'osteo sarcoma dari'),
(3462, 'osteo sarcoma femur'),
(3463, 'osteo sarcoma lutut'),
(3464, 'osteoartritis'),
(3465, 'Osteomielitis'),
(3466, 'osteomyolitis'),
(3467, 'osteonecrosis'),
(3468, 'otitis'),
(3469, 'Otitis media dan gangguanÂ  mastoid danÂ  telinga tengah'),
(3470, 'over dosis'),
(3471, 'PAI'),
(3472, 'pain abdominal'),
(3473, 'palacenta previa ( jalan keluar bayi tertutup placenta)'),
(3474, 'palato sciziz'),
(3475, 'palpitasi'),
(3476, 'palsy cerebral'),
(3477, 'pancereas anular'),
(3478, 'pancreatitis acut'),
(3479, 'pancytopenia'),
(3480, 'panic diserdes'),
(3481, 'Pankreatitis akut dan penyakit pankreas lainnya'),
(3482, 'panophtalmitis'),
(3483, 'paraliasi pertodik'),
(3484, 'paralitik ilius'),
(3485, 'paraparesis'),
(3486, 'paringitis'),
(3487, 'parkinson'),
(3488, 'Parkinson sekunder'),
(3489, 'parotitis'),
(3490, 'partus imaturus'),
(3491, 'partus kasep'),
(3492, 'partus kobrojal'),
(3493, 'partus lama'),
(3494, 'Paru/lobus luluh akibat TB'),
(3495, 'pasang sepiral'),
(3496, 'pasca oferictomi'),
(3497, 'pasiccsomatis'),
(3498, 'PAT'),
(3499, 'Patek (Frambusia)'),
(3500, 'Pelayanan yang melibatkan gangguan prosedur prosedur rehabilitasi'),
(3501, 'pelvic peritonisis'),
(3502, 'Pemaparan bising'),
(3503, 'Pemaparan getaran'),
(3504, 'Pemaparan radiasi pengion'),
(3505, 'Pemaparan radiasi pengion lain'),
(3506, 'Pemaparan radiasi YTT'),
(3507, 'Pemaparan sinar ultra violet dan man-mide visible'),
(3508, 'Pemasangan dan penyesuaian gigi palsu'),
(3509, 'Pemasangan dan penyesuaian kacamata dan lensa kontak'),
(3510, 'Pemeriksaan kesehatan bayi dan anak secara rutin'),
(3511, 'Pemeriksaan kesehatan umum'),
(3512, 'pendarahan anus'),
(3513, 'pendarahan gusi'),
(3514, 'pendarahan infra kranial PIK'),
(3515, 'pendarahan intra abdomen'),
(3516, 'pendarahan intra cranial'),
(3517, 'pendarahan pasca menopouse'),
(3518, 'Pendarahan pasca persalinan'),
(3519, 'pendarahan post op'),
(3520, 'pendarahan tali pusat bayi'),
(3521, 'pendarahan umbilicoli'),
(3522, 'pendarahn pons'),
(3523, 'penelitis'),
(3524, 'penemo thorax'),
(3525, 'penemo torax acut /cronik'),
(3526, 'penemunia deastinum bayi'),
(3527, 'penemunia disdtinum'),
(3528, 'Pengawasan kehamilan dengan risiko tinggi'),
(3529, 'Pengawasan kehamilan normal'),
(3530, 'Pengelolaan kontrasepsi'),
(3531, 'Penunjang sarana kesehatan untuk alasan Lainnya'),
(3532, 'Penyakit alat kelamin laki lainnya'),
(3533, 'Penyakit Alzheimer'),
(3534, 'Penyakit apendiks'),
(3535, 'Penyakit arteri, arteriol dan kapiler lainnya'),
(3536, 'Penyakit bakteria lainnya'),
(3537, 'Penyakit bibir, mukosa mulut lainnya dan lidah'),
(3538, 'Penyakit cacing tambang'),
(3539, 'Penyakit Crohn dan tukak kolitis'),
(3540, 'Penyakit de Quervain'),
(3541, 'Penyakit Divertikel usus'),
(3542, 'Penyakit esofagus, lambung dan duodenum lainnya'),
(3543, 'Penyakit glomerulus lainnya'),
(3544, 'Penyakit gondok nontoksik lain'),
(3545, 'Penyakit gusi, jaringan periodontal dan tulang alveolar'),
(3546, 'Penyakit hati akibat bahan beracun di tempat kerja'),
(3547, 'Penyakit Hati Alkohol'),
(3548, 'Penyakit hati lainnya'),
(3549, 'Penyakit hemolitik pd janin & bayi baru lahir'),
(3550, 'Penyakit hidung dan sinus hidung lainnya'),
(3551, 'Penyakit hipertensi lainnya'),
(3552, 'Penyakit Hodgkin'),
(3553, 'Penyakit infeksi dan parasit kongenital'),
(3554, 'Penyakit infeksi dan parasit lainnya'),
(3555, 'Penyakit infeksi usus lainnya'),
(3556, 'Penyakit jantung iskemik lainnya'),
(3557, 'Penyakit jantung lainnya'),
(3558, 'Penyakit jantung reumatik kronik'),
(3559, 'Penyakit jaringan keras gigi lainnya'),
(3560, 'Penyakit jaringan lunak mulut (Stomatitis)Â  dan lesi yang berkaitan'),
(3561, 'Penyakit kelenjar liur'),
(3562, 'Penyakit klamidia yg ditularkan melalui hubungan seksual'),
(3563, 'Penyakit kulit dan jaringan subkutan lainnya'),
(3564, 'Penyakit lain mata dan adneksa'),
(3565, 'Penyakit Parkinson'),
(3566, 'Penyakit pembuluh darah perifer lainnya'),
(3567, 'Penyakit pulpa dan periapikal'),
(3568, 'penyakit radang panggul PRP'),
(3569, 'Penyakit radang susunan saraf pusat'),
(3570, 'Penyakit saluran napas bagian atas lainnya'),
(3571, 'Penyakit serebrovaskular lainnya'),
(3572, 'Penyakit sistem cerna lainnya'),
(3573, 'Penyakit sistem kemih lainnya'),
(3574, 'Penyakit sistem muskuloskeletal dan jaringan ikat'),
(3575, 'Penyakit sistem napas lainnya'),
(3576, 'Penyakit sistem sirkulasi lainnya'),
(3577, 'Penyakit susunan saraf lainnya'),
(3578, 'Penyakit telinga dan prosesus mastoid'),
(3579, 'Penyakit tertentu yang menyangkut mekanisme imun'),
(3580, 'Penyakit tonsil dan adenoid kronik'),
(3581, 'Penyakit tubulo-interstitial ginjal lainnya'),
(3582, 'Penyakit usus dan peritoneum lainnya'),
(3583, 'Penyakit virus gangguan defisiensi imunÂ  pada manusia (HIV)'),
(3584, 'Penyakit virus lainnya'),
(3585, 'Penyulit awal trauma tertentu dan penyulit pembedahan dan perawatan YTK di tempat lain'),
(3586, 'Penyulit kehamilan dan persalinan lainnya'),
(3587, 'Penyulit yang lebih banyak berhubunganÂ  dengan masa nifas dan kondisi obstetrikÂ  lainnya, YTK ditempat lain'),
(3588, 'Perawatan dan pemeriksaan pasca persalinan'),
(3589, 'Perawatan ibu yang berkaitan dengan janinÂ  dan ketuban dan masalah persalinan'),
(3590, 'percoban bunuh diri ( gantung diri)'),
(3591, 'Perdarahan antepartum YTK ditempat lain'),
(3592, 'Perdarahan intrakranial'),
(3593, 'pereleukemia'),
(3594, 'pereplegia'),
(3595, 'perforasi ileum/usus'),
(3596, 'peri penopose bleeding'),
(3597, 'periapendicitis'),
(3598, 'pericardial Effusi'),
(3599, 'periodentitis acut'),
(3600, 'peritonisis difusi'),
(3601, 'peritonisis generalized'),
(3602, 'peritonitis'),
(3603, 'peritonsilaer abses'),
(3604, 'Perlemakan hati'),
(3605, 'perodenitis cronic'),
(3606, 'perporasi jejunum'),
(3607, 'perporasi kolon sigmoid'),
(3608, 'perpurasi MAC'),
(3609, 'Persalinan dengan penyulit gawat janin'),
(3610, 'Persalinan macet'),
(3611, 'Persalinan multipel'),
(3612, 'Persalinan prematur'),
(3613, 'Persalinan tunggal spontan'),
(3614, 'persiapan CT scen'),
(3615, 'persistensi gigi'),
(3616, 'Pertumbuhan janin lamban, malnutrisi janin dan gangguan yang berhubungan dengan ke-hamilan pendek dan berat badan lahir rendah'),
(3617, 'pertusis'),
(3618, 'Pertusis/Batuk rejan'),
(3619, 'phymosis'),
(3620, 'Piotoraks [empiema]'),
(3621, 'pisikosis organik'),
(3622, 'placenta pravia bayi'),
(3623, 'Plak pleural'),
(3624, 'Plasenta previa'),
(3625, 'plaura pnemunia'),
(3626, 'plebitis'),
(3627, 'plegmoa'),
(3628, 'pleura efusi'),
(3629, 'PNC'),
(3630, 'pnemonia lobaris'),
(3631, 'pnemu torax'),
(3632, 'pnemunia antipical'),
(3633, 'pnemunia sapirasi'),
(3634, 'Pneumokoniosis'),
(3635, 'Pneumonia'),
(3636, 'Pneumonitis Hipersensitivity akibat abu organik'),
(3637, 'Pneumotoraks'),
(3638, 'PNH ( parokimal noctumal hemoglobimuria)'),
(3639, 'poli artritis'),
(3640, 'policetimia vera'),
(3641, 'policystic pam'),
(3642, 'polidektili'),
(3643, 'polimialgia'),
(3644, 'polineurpati'),
(3645, 'Poliomielitis akut'),
(3646, 'polip cervikes'),
(3647, 'polip endumetrium'),
(3648, 'polip gaster'),
(3649, 'polip gaster /stomach'),
(3650, 'Polip gastrointestinal'),
(3651, 'polip nasi'),
(3652, 'polip recti'),
(3653, 'polip rectum'),
(3654, 'pollip nasi'),
(3655, 'polmunal stenosis'),
(3656, 'polmunari congestion'),
(3657, 'porforasi sigmoid'),
(3658, 'porforasi usus'),
(3659, 'porfurasi ileum'),
(3660, 'porpurasi gaster'),
(3661, 'portionisilair infiltrat'),
(3662, 'post concusison syndrome'),
(3663, 'post congital bleding'),
(3664, 'post op apendictomy'),
(3665, 'post op strumectomy'),
(3666, 'post sigmoidectomy'),
(3667, 'post vcolostomy'),
(3668, 'post veginal repair'),
(3669, 'PPOM'),
(3670, 'pre eklamsia brat'),
(3671, 'pre eklamusia ringan'),
(3672, 'prematur'),
(3673, 'prematur bayi'),
(3674, 'Prepusium berlebih, fimosis dan parafimosis'),
(3675, 'PRM'),
(3676, 'proktitis'),
(3677, 'prolap uteri'),
(3678, 'Prolaps alat kelamin perempuan'),
(3679, 'prolaps anus'),
(3680, 'prolaps colostomy'),
(3681, 'prolaps iris'),
(3682, 'prolaps mata'),
(3683, 'prolaps tali pusat'),
(3684, 'prolaps usus'),
(3685, 'prolaps uteri ( tunggal pagiana)'),
(3686, 'prolongud leten fase'),
(3687, 'propthosis'),
(3688, 'protatitis'),
(3689, 'protenosis alveuler'),
(3690, 'prtonisis TBC'),
(3691, 'PSA ( pendarahan sub arachnoid'),
(3692, 'psaudar throsis'),
(3693, 'pseudophkia'),
(3694, 'psikosis'),
(3695, 'Psoriasis dan artropati enteropati'),
(3696, 'Psoriasis dan atropati lainnya'),
(3697, 'psoriasis pustular'),
(3698, 'psoriasis vulgenis'),
(3699, 'psudo pteregium'),
(3700, 'pteregium'),
(3701, 'PTG ( penyakit tropobles ganas)'),
(3702, 'ptisisc bulbi'),
(3703, 'ptosis'),
(3704, 'PUD'),
(3705, 'pulmunal insufiensi'),
(3706, 'PVC bigemini'),
(3707, 'pyalolitasi'),
(3708, 'pyelonepritis'),
(3709, 'pyelonepritis acut'),
(3710, 'pyolonepritis kronik'),
(3711, 'pyoneprosus'),
(3712, 'RA'),
(3713, 'rabies');
INSERT INTO `diagnosas` (`id`, `diagnosa`) VALUES
(3714, 'Rabies'),
(3715, 'Radang alat dalam panggul perempuan lainnya (adneksitis)'),
(3716, 'Radang kelopak mata'),
(3717, 'Radang panggul perempuan lainnya'),
(3718, 'Radang serviks'),
(3719, 'ranala'),
(3720, 'RBBB'),
(3721, 'RDS'),
(3722, 'reactur hepatitis'),
(3723, 'reaksi anaphilactic'),
(3724, 'reaksi conversi'),
(3725, 'reaksi convrsi'),
(3726, 'reaksi hipoglekimia'),
(3727, 'reaksi stress acut'),
(3728, 'Reaksi terhadap stres berat dan gangguan penyesuaian, gangguan somatoform, gangguan neurotik lainnya'),
(3729, 'rebtomysarcoma cruris dextra'),
(3730, 'rectal bleeding'),
(3731, 'rectal bleeding bayi'),
(3732, 'recto vagianal fistula'),
(3733, 'reflex esofagus'),
(3734, 'reflix esofagus'),
(3735, 'reftur palpebra'),
(3736, 'reftur tendon flexon digit'),
(3737, 'refture alvecler'),
(3738, 'refture artery'),
(3739, 'refture tuba'),
(3740, 'refture vagina'),
(3741, 'ren mobilis'),
(3742, 'renal colix'),
(3743, 'renal fail'),
(3744, 'renal nsipiensi'),
(3745, 'reptum perineum (post partum )');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokters`
--

CREATE TABLE `dokters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_dokter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_dokter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokters`
--

INSERT INTO `dokters` (`id`, `nip`, `name_dokter`, `specialist`, `address`, `hp`, `avatar`, `username`, `password`, `status_dokter`, `created_at`, `updated_at`) VALUES
(1, '198503302003121225', 'dr.Elisa Ramadanti', 'Dokter Umum', 'jl. A.H.Natution no 30', '02263075716', 'avatar/BXx96RvNgIpD6p7nTp2A4tf2YtLYtqiKOJo3ldRP.jpeg', 'dokter_elisa', '$2y$10$1ByvxI/jvvAn4zwAN7hw8uIGRxEoWnArmc.zHuSwZ/4NcVwaHTO8S', 'ada', '2019-04-07 04:26:27', '2019-04-07 04:26:27'),
(2, '198503302003121001', 'dr.Rani Irawan', 'Dokter Umum', 'jl. A.H.Natution no 30', '02263075716', 'avatar/vd7eWwtkq61KFElVBEWs4cOzPi7JT6cw1BD8V6WY.jpeg', 'dokter_rani', '$2y$10$gGgeRDMNwqO526kQ1rVLwO6OSZA5d0B3f5nGl.zgTZDwmxVBELqAO', 'not checked', '2019-04-07 04:27:04', '2019-04-07 04:27:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medicals`
--

CREATE TABLE `medicals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_visitor` bigint(20) UNSIGNED NOT NULL,
  `diagnosa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `medicals`
--

INSERT INTO `medicals` (`id`, `id_visitor`, `diagnosa`, `keluhan`, `saran`, `fee`, `created_at`, `updated_at`) VALUES
(4, 1, 'Influensa', 'flu batuk', 'jangan minum es', '45000.00', '2019-04-12 16:48:18', '2019-04-12 16:48:18'),
(5, 3, 'Abses perut', 'sakit perut', 'jaga kesehatan', '45000.00', '2019-04-12 16:56:47', '2019-04-12 16:56:47'),
(6, 5, 'Anemia hemolitik', 'pusing', 'jaga kesehatan', '45000.00', '2019-04-12 16:58:20', '2019-04-12 16:58:20'),
(7, 6, 'Anemia hemolitik', 'pusing demam', 'jaga kesehatan', '45000.00', '2019-04-13 22:21:16', '2019-04-13 22:21:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(76, '2014_10_12_000000_create_users_table', 1),
(77, '2014_10_12_100000_create_password_resets_table', 1),
(94, '2019_03_03_125744_create_dokters_table', 2),
(95, '2019_03_05_140626_create_schedules_table', 2),
(123, '2019_03_10_101232_create_pasiens_table', 3),
(124, '2019_03_18_142703_create_visits_table', 3),
(125, '2019_03_19_114030_create_medicals_table', 3),
(126, '2019_04_01_151925_create_reseps_table', 3),
(127, '2019_04_02_130518_create_diagnosas_table', 3),
(128, '2019_04_03_122656_create_obats_table', 3),
(129, '2019_04_13_000124_create_belis_table', 4),
(130, '2019_04_13_011726_create_orders_table', 5),
(131, '2019_04_13_012413_create_obat_orders_table', 6),
(133, '2019_04_14_072416_create_resepkus_table', 7),
(134, '2019_04_14_082022_create_reseps_table', 8),
(135, '2019_04_19_012331_create_carts_table', 9),
(136, '2019_04_21_110836_create_checkouts_table', 10),
(137, '2019_04_22_154832_create_save_transaksis_table', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `obats`
--

CREATE TABLE `obats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_obat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `obats`
--

INSERT INTO `obats` (`id`, `nm_obat`, `golongan`, `harga`, `satuan`, `stok`, `status`, `ket`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Benoson M CR 5G', 'Salep', 78.214, '/tube', 50, '0', 'peradangan pada kulit atau mukosa yang disertai infeksi bakteri', 'avatar/bEozj2P41rgiT3AbujVV0GNIv2tXwwAUvrwoKTGp.jpeg', '2019-04-09 04:39:31', '2019-04-09 04:39:31'),
(2, 'BENOSON N CR 15G', 'Salep', 47.833, '/tube', 50, '0', 'betametason 0.1% + neomisin sulfat 0.5%. Peradangan pada kulit atau mukosa yang disertai infeksi bakteri', 'avatar/ipa8V6jPL5BAoiKLoSKaAPliEekwmxZpurKjWa0y.jpeg', '2019-04-09 04:41:05', '2019-04-09 04:41:05'),
(3, 'CANDESARTAN DEXA 8MG TAB', 'Tablet', 6.402, '/tablet', 0, '1', 'hipertensi, pengobatan pada pasien gagal jantung dan gangguan fungsi sistolik ventrikel kiri ketika obat penghambat ACE tidak ditolerir', 'avatar/YJTfe3TxOp0NVq7cRzxpvOROcDQfF1sR2P8XQ6cO.png', '2019-04-09 04:44:11', '2019-04-09 04:44:11'),
(4, 'ATORVASTATIN 20MG TAB', 'Tablet', 5.644, '/tube', 50, '0', 'menurunkan kolesterol total, LDL-cholesterol, apolipoprotein B & triglycerides pada hiperkolesterolemia, hiperlipidaemia.', 'avatar/2MkcAyWmogtdloIRFoGoT0gkFO02NmuwP2qqv3yq.jpeg', '2019-04-09 04:46:26', '2019-04-09 04:46:26'),
(5, 'AMLODIPINE BERNO 5MG TAB', 'Tablet', 1.478, '/tablet', 50, '0', 'untuk hipertensi dan angina', 'avatar/VbfuJkEZsC3p5wSva1mkXVM2XW4x3YQCoE4Ekdib.jpeg', '2019-04-09 04:48:06', '2019-04-09 04:48:06'),
(6, 'PANADOL COLD FLU REG TAB 10S', 'Tablet', 6.402, '/strip', 50, '0', 'meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin bersin disertai batuk.', 'avatar/qXqTZvLo30zAhJB3yBOJJ1JK3CKMX4KulayF7Gd6.jpeg', '2019-04-17 19:22:19', '2019-04-17 19:22:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat_orders`
--

CREATE TABLE `obat_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_order` bigint(20) UNSIGNED NOT NULL,
  `id_obat` bigint(20) UNSIGNED NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `obat_orders`
--

INSERT INTO `obat_orders` (`id`, `id_order`, `id_obat`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2019-02-25 22:06:46', '2019-02-25 22:06:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pembeli` bigint(20) UNSIGNED NOT NULL,
  `total_price` double(8,2) UNSIGNED NOT NULL,
  `invoice` char(119) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('SUBMIT','PROCESS','FINISH','CANCEL') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `id_pembeli`, `total_price`, `invoice`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 85000.00, '', 'PROCESS', '2019-01-31 02:21:15', '2019-02-25 22:06:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasiens`
--

CREATE TABLE `pasiens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bpjs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pasiens`
--

INSERT INTO `pasiens` (`id`, `name`, `age`, `gender`, `address`, `hp`, `bpjs`, `created_at`, `updated_at`) VALUES
(1, 'Rina anjari', 16, 'Female', 'Cilengkrang 1 no 30', '081224630757', 'BPJ00888467S', '2019-04-09 04:33:38', '2019-04-09 04:33:38'),
(2, 'Lela Armani', 5, 'Female', 'Cilengkrang 2 no 30', '085663223552', 'BPJ00888468S', '2019-04-09 04:34:01', '2019-04-09 04:34:01'),
(3, 'Rana Azhara', 21, 'Female', 'cileunyi no 30', '02263075716', 'BPJ00888468S', '2019-04-09 04:34:56', '2019-04-09 04:34:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reseps`
--

CREATE TABLE `reseps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visitor_id` bigint(20) UNSIGNED NOT NULL,
  `obat_id` bigint(20) UNSIGNED NOT NULL,
  `dosis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konsumsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reseps`
--

INSERT INTO `reseps` (`id`, `visitor_id`, `obat_id`, `dosis`, `konsumsi`, `jumlah`, `created_at`, `updated_at`) VALUES
(12, 3, 5, '3x1 hari', 'diminum sebelum makan', 1, '2019-04-15 04:27:38', '2019-04-15 04:27:38'),
(17, 1, 2, '2x1 hari', 'diminum sebelum makan', 1, '2019-04-15 04:38:52', '2019-04-15 04:38:52'),
(18, 1, 5, '2x1 hari', 'diminum sebelum mkn', 1, '2019-04-15 04:39:05', '2019-04-15 04:39:05'),
(19, 6, 2, '2x3 hari', 'diminum sebelum makan', 2, '2019-04-19 07:26:40', '2019-04-19 07:26:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `save_transaksi`
--

CREATE TABLE `save_transaksi` (
  `save_transaksi_id` varchar(45) NOT NULL,
  `nama` varchar(119) NOT NULL,
  `code` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `save_transaksis`
--

CREATE TABLE `save_transaksis` (
  `save_transaksi_id` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `save_transaksis`
--

INSERT INTO `save_transaksis` (`save_transaksi_id`, `nama`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
('719dfb8d-fd93-433b-a02f-f661bd60f2ed', 'TRX001_Rina', 1, 'dae3b418-e995-4d59-a802-f318246efa6f', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_dokter` bigint(20) UNSIGNED NOT NULL,
  `monday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuesday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wednesday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thursday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saturday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `schedules`
--

INSERT INTO `schedules` (`id`, `id_dokter`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `created_at`, `updated_at`) VALUES
(1, 1, '10.00 - 15.30', '-', '-', '09.00 - 14.00', '-', '-', '2019-04-07 04:28:57', '2019-04-07 04:28:57'),
(2, 2, '10.00 - 15.30', '10.00 - 13.00', '-', '-', '-', '-', '2019-04-07 04:29:25', '2019-04-07 04:29:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_transaksi`
--

CREATE TABLE `temp_transaksi` (
  `temp_transaksi_id` varchar(45) NOT NULL,
  `code` varchar(45) NOT NULL,
  `barang_id` varchar(45) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$6W32yF1cEQZupiSBx69Zu.qntdZXhH5cUr3fJNqpqZMR/NLUs1peK', 'admin', NULL, '2019-04-04 03:34:05', '2019-04-04 03:34:05'),
(2, 'Front Officer', 'frontofficer', 'front_officer.azelaic@gmail.com', NULL, '$2y$10$w4pyKeRCtxNmZh90PUz7IO2npPiLZkXrw6Ho.BclSACi20Z.la7M2', 'frontoffice', NULL, '2019-04-04 03:38:59', '2019-04-04 03:38:59'),
(3, 'Apoteker', 'apoteker', 'apoteker.azelaic@gmail.com', NULL, '$2y$10$1MnZLbMAAum08FV2NG.njeBg0LDBZgO8JPW6Ew6PsIfmX9tfUphpC', 'apoteker', NULL, '2019-04-04 03:44:28', '2019-04-04 03:44:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_dokter` bigint(20) UNSIGNED NOT NULL,
  `id_pasien` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kunjungan` date DEFAULT NULL,
  `updated_kunjungan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visits`
--

INSERT INTO `visits` (`id`, `id_dokter`, `id_pasien`, `status`, `tgl_kunjungan`, `updated_kunjungan`) VALUES
(1, 1, 1, 'checked', '2019-04-09', '2019-04-09'),
(3, 2, 3, 'checked', '2019-04-09', '2019-04-09'),
(5, 2, 2, 'checked', '2019-04-09', '2019-04-09'),
(6, 1, 3, 'checked', '2019-04-14', '2019-04-14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkouts_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`code_id`);

--
-- Indeks untuk tabel `diagnosas`
--
ALTER TABLE `diagnosas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dokters_nip_unique` (`nip`);

--
-- Indeks untuk tabel `medicals`
--
ALTER TABLE `medicals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicals_id_visitor_foreign` (`id_visitor`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `obat_orders`
--
ALTER TABLE `obat_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obat_orders_id_order_foreign` (`id_order`),
  ADD KEY `obat_orders_id_obat_foreign` (`id_obat`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoice` (`invoice`),
  ADD KEY `orders_id_pembeli_foreign` (`id_pembeli`);

--
-- Indeks untuk tabel `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `reseps`
--
ALTER TABLE `reseps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reseps_visitor_id_foreign` (`visitor_id`),
  ADD KEY `reseps_obat_id_foreign` (`obat_id`);

--
-- Indeks untuk tabel `save_transaksi`
--
ALTER TABLE `save_transaksi`
  ADD PRIMARY KEY (`save_transaksi_id`);

--
-- Indeks untuk tabel `save_transaksis`
--
ALTER TABLE `save_transaksis`
  ADD PRIMARY KEY (`save_transaksi_id`),
  ADD KEY `save_transaksis_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_id_dokter_foreign` (`id_dokter`);

--
-- Indeks untuk tabel `temp_transaksi`
--
ALTER TABLE `temp_transaksi`
  ADD PRIMARY KEY (`temp_transaksi_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `visits_id_dokter_foreign` (`id_dokter`),
  ADD KEY `visits_id_pasien_foreign` (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `code`
--
ALTER TABLE `code`
  MODIFY `code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `diagnosas`
--
ALTER TABLE `diagnosas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3746;

--
-- AUTO_INCREMENT untuk tabel `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `medicals`
--
ALTER TABLE `medicals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT untuk tabel `obats`
--
ALTER TABLE `obats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `obat_orders`
--
ALTER TABLE `obat_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `reseps`
--
ALTER TABLE `reseps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `checkouts`
--
ALTER TABLE `checkouts`
  ADD CONSTRAINT `checkouts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `visits` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `medicals`
--
ALTER TABLE `medicals`
  ADD CONSTRAINT `medicals_id_visitor_foreign` FOREIGN KEY (`id_visitor`) REFERENCES `visits` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `obat_orders`
--
ALTER TABLE `obat_orders`
  ADD CONSTRAINT `obat_orders_id_obat_foreign` FOREIGN KEY (`id_obat`) REFERENCES `obats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `obat_orders_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_id_pembeli_foreign` FOREIGN KEY (`id_pembeli`) REFERENCES `visits` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `reseps`
--
ALTER TABLE `reseps`
  ADD CONSTRAINT `reseps_obat_id_foreign` FOREIGN KEY (`obat_id`) REFERENCES `obats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reseps_visitor_id_foreign` FOREIGN KEY (`visitor_id`) REFERENCES `visits` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `save_transaksis`
--
ALTER TABLE `save_transaksis`
  ADD CONSTRAINT `save_transaksis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `visits` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokters` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `visits`
--
ALTER TABLE `visits`
  ADD CONSTRAINT `visits_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `visits_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasiens` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

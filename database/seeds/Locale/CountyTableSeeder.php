<?php

use DB;
use Illuminate\Database\Seeder;

class CountyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties')->insert(
            ['district_code' => 1, 'county_code' => 3, 'county_name' => 'MARUZI COUNTY'],
            ['district_code' => 1, 'county_code' => 291, 'county_name' => 'APAC MUNICIPALITY'],
            ['district_code' => 2, 'county_code' => 7, 'county_name' => 'AYIVU COUNTY'],
            ['district_code' => 2, 'county_code' => 11, 'county_name' => 'TEREGO WEST COUNTY'],
            ['district_code' => 2, 'county_code' => 12, 'county_name' => 'VURRA COUNTY'],
            ['district_code' => 2, 'county_code' => 13, 'county_name' => 'ARUA MUNICIPALITY'],
            ['district_code' => 2, 'county_code' => 279, 'county_name' => 'TEREGO EAST COUNTY'],
            ['district_code' => 3, 'county_code' => 14, 'county_name' => 'BWAMBA COUNTY'],
            ['district_code' => 3, 'county_code' => 215, 'county_name' => 'BUGHENDERA COUNTY'],
            ['district_code' => 4, 'county_code' => 18, 'county_name' => 'IGARA COUNTY EAST'],
            ['district_code' => 4, 'county_code' => 19, 'county_name' => 'IGARA COUNTY WEST'],
            ['district_code' => 4, 'county_code' => 225, 'county_name' => 'BUSHENYI -ISHAKA MUNICIPALITY'],
            ['district_code' => 5, 'county_code' => 23, 'county_name' => 'ASWA COUNTY'],
            ['district_code' => 5, 'county_code' => 27, 'county_name' => 'GULU MUNICIPALITY'],
            ['district_code' => 6, 'county_code' => 28, 'county_name' => 'BUGAHYA COUNTY'],
            ['district_code' => 6, 'county_code' => 227, 'county_name' => 'HOIMA MUNICIPALITY'],
            ['district_code' => 6, 'county_code' => 264, 'county_name' => 'KIGOROBYA COUNTY'],
            ['district_code' => 7, 'county_code' => 38, 'county_name' => 'KIGULU COUNTY NORTH'],
            ['district_code' => 7, 'county_code' => 39, 'county_name' => 'KIGULU COUNTY SOUTH'],
            ['district_code' => 7, 'county_code' => 228, 'county_name' => 'IGANGA MUNICIPALITY'],
            ['district_code' => 8, 'county_code' => 41, 'county_name' => 'BUTEMBE COUNTY'],
            ['district_code' => 8, 'county_code' => 42, 'county_name' => 'KAGOMA COUNTY'],
            ['district_code' => 8, 'county_code' => 43, 'county_name' => 'JINJA MUNICIPALITY EAST'],
            ['district_code' => 8, 'county_code' => 44, 'county_name' => 'JINJA MUNICIPALITY WEST'],
            ['district_code' => 9, 'county_code' => 45, 'county_name' => 'NDORWA COUNTY EAST'],
            ['district_code' => 9, 'county_code' => 46, 'county_name' => 'NDORWA COUNTY WEST'],
            ['district_code' => 9, 'county_code' => 50, 'county_name' => 'KABALE MUNICIPALITY'],
            ['district_code' => 10, 'county_code' => 52, 'county_name' => 'BURAHYA COUNTY'],
            ['district_code' => 10, 'county_code' => 58, 'county_name' => 'FORT PORTAL MUNICIPALITY'],
            ['district_code' => 11, 'county_code' => 59, 'county_name' => 'BUJUMBA COUNTY'],
            ['district_code' => 11, 'county_code' => 60, 'county_name' => 'KYAMUSWA COUNTY'],
            ['district_code' => 12, 'county_code' => 61, 'county_name' => 'KAMPALA CENTRAL DIVISION'],
            ['district_code' => 12, 'county_code' => 62, 'county_name' => 'KAWEMPE DIVISION NORTH'],
            ['district_code' => 12, 'county_code' => 63, 'county_name' => 'KAWEMPE DIVISION SOUTH'],
            ['district_code' => 12, 'county_code' => 64, 'county_name' => 'MAKINDYE DIVISION EAST'],
            ['district_code' => 12, 'county_code' => 65, 'county_name' => 'MAKINDYE DIVISION WEST'],
            ['district_code' => 12, 'county_code' => 66, 'county_name' => 'RUBAGA DIVISION NORTH'],
            ['district_code' => 12, 'county_code' => 67, 'county_name' => 'RUBAGA DIVISION SOUTH'],
            ['district_code' => 12, 'county_code' => 68, 'county_name' => 'NAKAWA DIVISION'],
            ['district_code' => 13, 'county_code' => 70, 'county_name' => 'BUGABULA COUNTY NORTH'],
            ['district_code' => 13, 'county_code' => 71, 'county_name' => 'BUGABULA COUNTY SOUTH'],
            ['district_code' => 13, 'county_code' => 73, 'county_name' => 'BUZAAYA COUNTY'],
            ['district_code' => 13, 'county_code' => 282, 'county_name' => 'KAMULI MUNICIPALITY'],
            ['district_code' => 14, 'county_code' => 76, 'county_name' => 'TINGEY COUNTY'],
            ['district_code' => 14, 'county_code' => 283, 'county_name' => 'KAPCHORWA MUNICIPALITY'],
            ['district_code' => 15, 'county_code' => 77, 'county_name' => 'BUKONZO COUNTY  EAST'],
            ['district_code' => 15, 'county_code' => 78, 'county_name' => 'BUKONJO COUNTY WEST'],
            ['district_code' => 15, 'county_code' => 79, 'county_name' => 'BUSONGORA COUNTY NORTH'],
            ['district_code' => 15, 'county_code' => 80, 'county_name' => 'BUSONGORA COUNTY SOUTH'],
            ['district_code' => 15, 'county_code' => 229, 'county_name' => 'KASESE MUNICIPALITY'],
            ['district_code' => 16, 'county_code' => 83, 'county_name' => 'BUYANJA COUNTY'],
            ['district_code' => 17, 'county_code' => 84, 'county_name' => 'KIBOGA  EAST COUNTY'],
            ['district_code' => 18, 'county_code' => 86, 'county_name' => 'BUFUMBIRA COUNTY EAST'],
            ['district_code' => 18, 'county_code' => 87, 'county_name' => 'BUFUMBIRA COUNTY NORTH'],
            ['district_code' => 18, 'county_code' => 88, 'county_name' => 'BUFUMBIRA COUNTY SOUTH'],
            ['district_code' => 18, 'county_code' => 285, 'county_name' => 'KISORO MUNICIPALITY'],
            ['district_code' => 19, 'county_code' => 91, 'county_name' => 'CHUA WEST COUNTY'],
            ['district_code' => 19, 'county_code' => 250, 'county_name' => 'CHUA EAST COUNTY'],
            ['district_code' => 19, 'county_code' => 286, 'county_name' => 'KITGUM MUNICIPALITY'],
            ['district_code' => 20, 'county_code' => 94, 'county_name' => 'JIE COUNTY'],
            ['district_code' => 20, 'county_code' => 296, 'county_name' => 'KOTIDO MUNICIPALITY'],
            ['district_code' => 21, 'county_code' => 97, 'county_name' => 'KUMI COUNTY'],
            ['district_code' => 21, 'county_code' => 258, 'county_name' => 'KANYUM COUNTY'],
            ['district_code' => 21, 'county_code' => 288, 'county_name' => 'KUMI MUNICIPALITY'],
            ['district_code' => 22, 'county_code' => 100, 'county_name' => 'ERUTE COUNTY NORTH'],
            ['district_code' => 22, 'county_code' => 101, 'county_name' => 'ERUTE COUNTY SOUTH'],
            ['district_code' => 22, 'county_code' => 105, 'county_name' => 'LIRA MUNICIPALITY'],
            ['district_code' => 23, 'county_code' => 107, 'county_name' => 'KATIKAMU COUNTY NORTH'],
            ['district_code' => 23, 'county_code' => 108, 'county_name' => 'KATIKAMU COUNTY SOUTH'],
            ['district_code' => 23, 'county_code' => 110, 'county_name' => 'BAMUNANIKA COUNTY'],
            ['district_code' => 24, 'county_code' => 114, 'county_name' => 'BUKOTO COUNTY EAST'],
            ['district_code' => 24, 'county_code' => 116, 'county_name' => 'BUKOTO COUNTY CENTRAL'],
            ['district_code' => 24, 'county_code' => 121, 'county_name' => 'MASAKA MUNICIPALITY'],
            ['district_code' => 25, 'county_code' => 122, 'county_name' => 'BUJENJE COUNTY'],
            ['district_code' => 25, 'county_code' => 124, 'county_name' => 'BURULI COUNTY'],
            ['district_code' => 25, 'county_code' => 230, 'county_name' => 'MASINDI MUNICIPALITY'],
            ['district_code' => 26, 'county_code' => 131, 'county_name' => 'BUNGOKHO COUNTY NORTH'],
            ['district_code' => 26, 'county_code' => 132, 'county_name' => 'BUNGOKHO COUNTY SOUTH'],
            ['district_code' => 26, 'county_code' => 134, 'county_name' => 'MBALE MUNICIPALITY'],
            ['district_code' => 27, 'county_code' => 140, 'county_name' => 'KASHARI NORTH COUNTY'],
            ['district_code' => 27, 'county_code' => 144, 'county_name' => 'MBARARA MUNICIPALITY'],
            ['district_code' => 27, 'county_code' => 259, 'county_name' => 'KASHARI SOUTH COUNTY'],
            ['district_code' => 28, 'county_code' => 147, 'county_name' => 'MATHENIKO COUNTY'],
            ['district_code' => 28, 'county_code' => 150, 'county_name' => 'MOROTO MUNICIPALITY'],
            ['district_code' => 28, 'county_code' => 278, 'county_name' => 'TEPETH COUNTY'],
            ['district_code' => 29, 'county_code' => 153, 'county_name' => 'WEST MOYO COUNTY'],
            ['district_code' => 30, 'county_code' => 162, 'county_name' => 'MAWOKOTA COUNTY NORTH'],
            ['district_code' => 30, 'county_code' => 163, 'county_name' => 'MAWOKOTA COUNTY SOUTH'],
            ['district_code' => 31, 'county_code' => 166, 'county_name' => 'BUWEKULA COUNTY'],
            ['district_code' => 31, 'county_code' => 221, 'county_name' => 'KASAMBYA COUNTY'],
            ['district_code' => 31, 'county_code' => 290, 'county_name' => 'MUBENDE MUNICIPALITY'],
            ['district_code' => 32, 'county_code' => 176, 'county_name' => 'MUKONO COUNTY NORTH'],
            ['district_code' => 32, 'county_code' => 177, 'county_name' => 'MUKONO COUNTY SOUTH'],
            ['district_code' => 32, 'county_code' => 178, 'county_name' => 'NAKIFUMA COUNTY'],
            ['district_code' => 32, 'county_code' => 231, 'county_name' => 'MUKONO MUNICIPALITY'],
            ['district_code' => 33, 'county_code' => 183, 'county_name' => 'PADYERE COUNTY'],
            ['district_code' => 33, 'county_code' => 292, 'county_name' => 'NEBBI MUNICIPALITY'],
            ['district_code' => 34, 'county_code' => 184, 'county_name' => 'KAJARA COUNTY'],
            ['district_code' => 34, 'county_code' => 185, 'county_name' => 'RUHAAMA COUNTY'],
            ['district_code' => 34, 'county_code' => 186, 'county_name' => 'RUSHENYI COUNTY'],
            ['district_code' => 34, 'county_code' => 232, 'county_name' => 'NTUNGAMO MUNICIPALITY'],
            ['district_code' => 35, 'county_code' => 190, 'county_name' => 'PALLISA COUNTY'],
            ['district_code' => 35, 'county_code' => 234, 'county_name' => 'AGULE COUNTY'],
            ['district_code' => 35, 'county_code' => 261, 'county_name' => 'KIBALE COUNTY'],
            ['district_code' => 36, 'county_code' => 193, 'county_name' => 'KOOKI COUNTY'],
            ['district_code' => 36, 'county_code' => 249, 'county_name' => 'BUYAMBA COUNTY'],
            ['district_code' => 37, 'county_code' => 197, 'county_name' => 'RUBABO COUNTY'],
            ['district_code' => 37, 'county_code' => 198, 'county_name' => 'RUJUMBURA COUNTY'],
            ['district_code' => 37, 'county_code' => 233, 'county_name' => 'RUKUNGIRI MUNICIPALITY'],
            ['district_code' => 38, 'county_code' => 205, 'county_name' => 'SOROTI COUNTY'],
            ['district_code' => 38, 'county_code' => 207, 'county_name' => 'SOROTI MUNICIPALITY'],
            ['district_code' => 38, 'county_code' => 251, 'county_name' => 'DAKABELA COUNTY'],
            ['district_code' => 39, 'county_code' => 209, 'county_name' => 'WEST BUDAMA COUNTY NORTH'],
            ['district_code' => 39, 'county_code' => 210, 'county_name' => 'WEST BUDAMA COUNTY SOUTH'],
            ['district_code' => 39, 'county_code' => 213, 'county_name' => 'TORORO SOUTH COUNTY'],
            ['district_code' => 39, 'county_code' => 214, 'county_name' => 'TORORO MUNICIPALITY'],
            ['district_code' => 39, 'county_code' => 281, 'county_name' => 'TORORO NORTH COUNTY'],
            ['district_code' => 40, 'county_code' => 151, 'county_name' => 'ADJUMANI WEST COUNTY'],
            ['district_code' => 40, 'county_code' => 239, 'county_name' => 'ADJUMANI EAST COUNTY'],
            ['district_code' => 41, 'county_code' => 31, 'county_name' => 'BUKOOLI COUNTY CENTRAL'],
            ['district_code' => 41, 'county_code' => 32, 'county_name' => 'BUKOOLI COUNTY NORTH'],
            ['district_code' => 41, 'county_code' => 295, 'county_name' => 'BUGIRI MUNICIPALITY'],
            ['district_code' => 42, 'county_code' => 211, 'county_name' => 'SAMIA BUGWE COUNTY NORTH'],
            ['district_code' => 42, 'county_code' => 212, 'county_name' => 'SAMIA BUGWE COUNTY SOUTH'],
            ['district_code' => 42, 'county_code' => 226, 'county_name' => 'BUSIA MUNICIPALITY'],
            ['district_code' => 43, 'county_code' => 206, 'county_name' => 'USUK COUNTY'],
            ['district_code' => 43, 'county_code' => 224, 'county_name' => 'TOROMA COUNTY'],
            ['district_code' => 44, 'county_code' => 106, 'county_name' => 'NAKASONGOLA COUNTY'],
            ['district_code' => 44, 'county_code' => 218, 'county_name' => 'BUDYEBO COUNTY'],
            ['district_code' => 45, 'county_code' => 119, 'county_name' => 'LWEMIYAGA COUNTY'],
            ['district_code' => 45, 'county_code' => 120, 'county_name' => 'MAWOGOLA COUNTY'],
            ['district_code' => 45, 'county_code' => 273, 'county_name' => 'MAWOGOLA NORTH COUNTY'],
            ['district_code' => 46, 'county_code' => 53, 'county_name' => 'KIBALE COUNTY'],
            ['district_code' => 46, 'county_code' => 262, 'county_name' => 'KIBALE EAST COUNTY'],
            ['district_code' => 47, 'county_code' => 171, 'county_name' => 'BBALE COUNTY'],
            ['district_code' => 47, 'county_code' => 179, 'county_name' => 'NTENJERU COUNTY NORTH'],
            ['district_code' => 47, 'county_code' => 180, 'county_name' => 'NTENJERU COUNTY SOUTH'],
            ['district_code' => 48, 'county_code' => 56, 'county_name' => 'MWENGE COUNTY NORTH'],
            ['district_code' => 48, 'county_code' => 57, 'county_name' => 'MWENGE COUNTY SOUTH'],
            ['district_code' => 48, 'county_code' => 274, 'county_name' => 'MWENGE CENTRAL COUNTY'],
            ['district_code' => 49, 'county_code' => 34, 'county_name' => 'BUNYA COUNTY EAST'],
            ['district_code' => 49, 'county_code' => 35, 'county_name' => 'BUNYA COUNTY SOUTH'],
            ['district_code' => 49, 'county_code' => 36, 'county_name' => 'BUNYA COUNTY WEST'],
            ['district_code' => 50, 'county_code' => 90, 'county_name' => 'ARUU COUNTY'],
            ['district_code' => 50, 'county_code' => 243, 'county_name' => 'ARUU NORTH COUNTY'],
            ['district_code' => 51, 'county_code' => 128, 'county_name' => 'BUDADIRI COUNTY EAST'],
            ['district_code' => 51, 'county_code' => 129, 'county_name' => 'BUDADIRI COUNTY  WEST'],
            ['district_code' => 52, 'county_code' => 154, 'county_name' => 'BUSIRO COUNTY EAST'],
            ['district_code' => 52, 'county_code' => 155, 'county_name' => 'BUSIRO COUNTY NORTH'],
            ['district_code' => 52, 'county_code' => 156, 'county_name' => 'BUSIRO COUNTY SOUTH'],
            ['district_code' => 52, 'county_code' => 159, 'county_name' => 'KYADONDO COUNTY EAST'],
            ['district_code' => 52, 'county_code' => 160, 'county_name' => 'NANSANA MUNICIPALITY'],
            ['district_code' => 52, 'county_code' => 161, 'county_name' => 'MAKINDYE-SSABAGABO MUNICIPALITY'],
            ['district_code' => 52, 'county_code' => 164, 'county_name' => 'ENTEBBE MUNICIPALITY'],
            ['district_code' => 52, 'county_code' => 284, 'county_name' => 'KIRA MUNICIPALITY'],
            ['district_code' => 53, 'county_code' => 6, 'county_name' => 'ARINGA COUNTY'],
            ['district_code' => 53, 'county_code' => 241, 'county_name' => 'ARINGA NORTH COUNTY'],
            ['district_code' => 53, 'county_code' => 242, 'county_name' => 'ARINGA SOUTH  COUNTY'],
            ['district_code' => 54, 'county_code' => 200, 'county_name' => 'KABERAMAIDO COUNTY'],
            ['district_code' => 55, 'county_code' => 195, 'county_name' => 'KINKIZI COUNTY EAST'],
            ['district_code' => 55, 'county_code' => 196, 'county_name' => 'KINKIZI COUNTY WEST'],
            ['district_code' => 56, 'county_code' => 146, 'county_name' => 'CHEKWII COUNTY (KADAM)'],
            ['district_code' => 57, 'county_code' => 102, 'county_name' => 'KIOGA COUNTY'],
            ['district_code' => 58, 'county_code' => 199, 'county_name' => 'AMURIA COUNTY'],
            ['district_code' => 58, 'county_code' => 276, 'county_name' => 'ORUNGO COUNTY'],
            ['district_code' => 59, 'county_code' => 74, 'county_name' => 'KONGASIS COUNTY'],
            ['district_code' => 60, 'county_code' => 208, 'county_name' => 'BUNYOLE EAST COUNTY'],
            ['district_code' => 60, 'county_code' => 236, 'county_name' => 'BUNYOLE WEST COUNTY'],
            ['district_code' => 61, 'county_code' => 136, 'county_name' => 'IBANDA COUNTY NORTH'],
            ['district_code' => 61, 'county_code' => 137, 'county_name' => 'IBANDA COUNTY SOUTH'],
            ['district_code' => 61, 'county_code' => 293, 'county_name' => 'IBANDA MUNICIPALITY'],
            ['district_code' => 62, 'county_code' => 135, 'county_name' => 'BUKANGA COUNTY'],
            ['district_code' => 62, 'county_code' => 138, 'county_name' => 'ISINGIRO COUNTY NORTH'],
            ['district_code' => 62, 'county_code' => 139, 'county_name' => 'ISINGIRO COUNTY SOUTH'],
            ['district_code' => 63, 'county_code' => 93, 'county_name' => 'DODOTH EAST COUNTY'],
            ['district_code' => 63, 'county_code' => 255, 'county_name' => 'IK COUNTY'],
            ['district_code' => 64, 'county_code' => 72, 'county_name' => 'BULAMOGI COUNTY'],
            ['district_code' => 64, 'county_code' => 247, 'county_name' => 'BULAMOGI NORTH WEST COUNTY'],
            ['district_code' => 65, 'county_code' => 142, 'county_name' => 'NYABUSHOZI COUNTY'],
            ['district_code' => 65, 'county_code' => 260, 'county_name' => 'KASHONGI COUNTY'],
            ['district_code' => 66, 'county_code' => 8, 'county_name' => 'KOBOKO COUNTY'],
            ['district_code' => 66, 'county_code' => 266, 'county_name' => 'KOBOKO NORTH COUNTY'],
            ['district_code' => 66, 'county_code' => 287, 'county_name' => 'KOBOKO MUNICIPALITY'],
            ['district_code' => 67, 'county_code' => 126, 'county_name' => 'BUBULO COUNTY WEST'],
            ['district_code' => 68, 'county_code' => 165, 'county_name' => 'BUSUJJU COUNTY'],
            ['district_code' => 68, 'county_code' => 169, 'county_name' => 'MITYANA COUNTY NORTH'],
            ['district_code' => 68, 'county_code' => 170, 'county_name' => 'MITYANA COUNTY SOUTH'],
            ['district_code' => 68, 'county_code' => 289, 'county_name' => 'MITYANA MUNICIPALITY'],
            ['district_code' => 69, 'county_code' => 109, 'county_name' => 'NAKASEKE SOUTH COUNTY'],
            ['district_code' => 69, 'county_code' => 223, 'county_name' => 'NAKASEKE NORTH COUNTY'],
            ['district_code' => 70, 'county_code' => 95, 'county_name' => 'LABWOR COUNTY'],
            ['district_code' => 71, 'county_code' => 24, 'county_name' => 'KILAK SOUTH COUNTY'],
            ['district_code' => 71, 'county_code' => 265, 'county_name' => 'KILAK NORTH COUNTY'],
            ['district_code' => 72, 'county_code' => 187, 'county_name' => 'BUDAKA COUNTY'],
            ['district_code' => 72, 'county_code' => 238, 'county_name' => 'IKI-IKI COUNTY'],
            ['district_code' => 73, 'county_code' => 123, 'county_name' => 'BULIISA COUNTY'],
            ['district_code' => 74, 'county_code' => 99, 'county_name' => 'DOKOLO NORTH COUNTY'],
            ['district_code' => 74, 'county_code' => 252, 'county_name' => 'DOKOLO SOUTH COUNTY'],
            ['district_code' => 75, 'county_code' => 37, 'county_name' => 'BUSIKI COUNTY'],
            ['district_code' => 75, 'county_code' => 245, 'county_name' => 'BUKONO COUNTY'],
            ['district_code' => 76, 'county_code' => 4, 'county_name' => 'OYAM COUNTY NORTH'],
            ['district_code' => 76, 'county_code' => 5, 'county_name' => 'OYAM COUNTY SOUTH'],
            ['district_code' => 77, 'county_code' => 10, 'county_name' => 'MARACHA COUNTY'],
            ['district_code' => 77, 'county_code' => 272, 'county_name' => 'MARACHA EAST COUNTY'],
            ['district_code' => 78, 'county_code' => 133, 'county_name' => 'MANJIYA COUNTY'],
            ['district_code' => 78, 'county_code' => 270, 'county_name' => 'LUTSESHE COUNTY'],
            ['district_code' => 79, 'county_code' => 96, 'county_name' => 'BUKEDEA COUNTY'],
            ['district_code' => 79, 'county_code' => 257, 'county_name' => 'KACHUMBALA COUNTY'],
            ['district_code' => 80, 'county_code' => 191, 'county_name' => 'KABULA COUNTY'],
            ['district_code' => 81, 'county_code' => 149, 'county_name' => 'UPE COUNTY'],
            ['district_code' => 82, 'county_code' => 172, 'county_name' => 'NJERU MUNICIPALITY'],
            ['district_code' => 82, 'county_code' => 173, 'county_name' => 'LUGAZI MUNICIPALITY'],
            ['district_code' => 82, 'county_code' => 174, 'county_name' => 'BUIKWE COUNTY SOUTH'],
            ['district_code' => 83, 'county_code' => 69, 'county_name' => 'BUDIOPE WEST COUNTY'],
            ['district_code' => 83, 'county_code' => 217, 'county_name' => 'BUDIOPE EAST COUNTY'],
            ['district_code' => 84, 'county_code' => 55, 'county_name' => 'KYAKA NORTH COUNTY'],
            ['district_code' => 84, 'county_code' => 268, 'county_name' => 'KYAKA SOUTH COUNTY'],
            ['district_code' => 85, 'county_code' => 92, 'county_name' => 'LAMWO COUNTY'],
            ['district_code' => 86, 'county_code' => 104, 'county_name' => 'OTUKE COUNTY'],
            ['district_code' => 87, 'county_code' => 182, 'county_name' => 'OKORO COUNTY'],
            ['district_code' => 87, 'county_code' => 275, 'county_name' => 'ORA COUNTY'],
            ['district_code' => 88, 'county_code' => 103, 'county_name' => 'MOROTO COUNTY'],
            ['district_code' => 88, 'county_code' => 216, 'county_name' => 'AJURI COUNTY'],
            ['district_code' => 89, 'county_code' => 130, 'county_name' => 'BULAMBULI COUNTY'],
            ['district_code' => 89, 'county_code' => 253, 'county_name' => 'ELGON COUNTY'],
            ['district_code' => 90, 'county_code' => 175, 'county_name' => 'BUVUMA ISLANDS COUNTY'],
            ['district_code' => 91, 'county_code' => 158, 'county_name' => 'GOMBA EAST COUNTY'],
            ['district_code' => 91, 'county_code' => 254, 'county_name' => 'GOMBA WEST COUNTY'],
            ['district_code' => 92, 'county_code' => 125, 'county_name' => 'KIBANDA SOUTH COUNTY'],
            ['district_code' => 92, 'county_code' => 263, 'county_name' => 'KIBANDA NORTH COUNTY'],
            ['district_code' => 93, 'county_code' => 85, 'county_name' => 'NTWETWE COUNTY'],
            ['district_code' => 93, 'county_code' => 248, 'county_name' => 'BUTEMBA COUNTY'],
            ['district_code' => 94, 'county_code' => 40, 'county_name' => 'LUUKA NORTH COUNTY'],
            ['district_code' => 94, 'county_code' => 271, 'county_name' => 'LUUKA SOUTH COUNTY'],
            ['district_code' => 95, 'county_code' => 33, 'county_name' => 'BUKOOLI SOUTH COUNTY'],
            ['district_code' => 95, 'county_code' => 235, 'county_name' => 'BUKOOLI ISLAND COUNTY'],
            ['district_code' => 96, 'county_code' => 15, 'county_name' => 'NTOROKO COUNTY'],
            ['district_code' => 97, 'county_code' => 203, 'county_name' => 'KASILO COUNTY'],
            ['district_code' => 97, 'county_code' => 204, 'county_name' => 'SERERE COUNTY'],
            ['district_code' => 98, 'county_code' => 111, 'county_name' => 'BUKOMANSIMBI NORTH COUNTY'],
            ['district_code' => 98, 'county_code' => 244, 'county_name' => 'BUKOMANSIMBI SOUTH COUNTY'],
            ['district_code' => 99, 'county_code' => 157, 'county_name' => 'BUTAMBALA COUNTY'],
            ['district_code' => 100, 'county_code' => 117, 'county_name' => 'KALUNGU EAST COUNTY'],
            ['district_code' => 100, 'county_code' => 118, 'county_name' => 'KALUNGU WEST COUNTY'],
            ['district_code' => 101, 'county_code' => 21, 'county_name' => 'SHEEMA COUNTY NORTH'],
            ['district_code' => 101, 'county_code' => 22, 'county_name' => 'SHEEMA COUNTY SOUTH'],
            ['district_code' => 101, 'county_code' => 294, 'county_name' => 'SHEEMA MUNICIPALITY'],
            ['district_code' => 102, 'county_code' => 189, 'county_name' => 'KIBUKU COUNTY'],
            ['district_code' => 102, 'county_code' => 256, 'county_name' => 'KABWERI COUNTY'],
            ['district_code' => 103, 'county_code' => 1, 'county_name' => 'KOLE SOUTH COUNTY'],
            ['district_code' => 103, 'county_code' => 267, 'county_name' => 'KOLE NORTH COUNTY'],
            ['district_code' => 104, 'county_code' => 75, 'county_name' => 'KWEEN COUNTY'],
            ['district_code' => 105, 'county_code' => 112, 'county_name' => 'BUKOTO COUNTY MID-WEST'],
            ['district_code' => 105, 'county_code' => 113, 'county_name' => 'BUKOTO COUNTY WEST'],
            ['district_code' => 105, 'county_code' => 115, 'county_name' => 'BUKOTO COUNTYSOUTH'],
            ['district_code' => 106, 'county_code' => 20, 'county_name' => 'RUHINDA COUNTY'],
            ['district_code' => 106, 'county_code' => 277, 'county_name' => 'RUHINDA NORTH COUNTY'],
            ['district_code' => 107, 'county_code' => 145, 'county_name' => 'BOKORA COUNTY'],
            ['district_code' => 108, 'county_code' => 98, 'county_name' => 'NGORA COUNTY'],
            ['district_code' => 109, 'county_code' => 16, 'county_name' => 'BUHWEJU COUNTY'],
            ['district_code' => 110, 'county_code' => 25, 'county_name' => 'NWOYA COUNTY'],
            ['district_code' => 111, 'county_code' => 89, 'county_name' => 'AGAGO COUNTY'],
            ['district_code' => 111, 'county_code' => 240, 'county_name' => 'AGAGO NORTH COUNTY'],
            ['district_code' => 112, 'county_code' => 17, 'county_name' => 'BUNYARUGURU COUNTY'],
            ['district_code' => 112, 'county_code' => 222, 'county_name' => 'KATERERA COUNTY'],
            ['district_code' => 113, 'county_code' => 82, 'county_name' => 'BUYAGA EAST COUNTY'],
            ['district_code' => 113, 'county_code' => 220, 'county_name' => 'BUYAGA WEST COUNTY'],
            ['district_code' => 114, 'county_code' => 81, 'county_name' => 'BUGANGAIZI WEST COUNTY'],
            ['district_code' => 114, 'county_code' => 219, 'county_name' => 'BUGANGAIZI EAST COUNTY'],
            ['district_code' => 115, 'county_code' => 26, 'county_name' => 'OMORO COUNTY'],
            ['district_code' => 115, 'county_code' => 280, 'county_name' => 'TOCHI COUNTY'],
            ['district_code' => 116, 'county_code' => 47, 'county_name' => 'RUBANDA COUNTY EAST'],
            ['district_code' => 116, 'county_code' => 48, 'county_name' => 'RUBANDA COUNTY WEST'],
            ['district_code' => 117, 'county_code' => 51, 'county_name' => 'BUNYANGABU COUNTY'],
            ['district_code' => 118, 'county_code' => 188, 'county_name' => 'BUTEBO COUNTY'],
            ['district_code' => 119, 'county_code' => 192, 'county_name' => 'KAKUUTO COUNTY'],
            ['district_code' => 119, 'county_code' => 194, 'county_name' => 'KYOTERA COUNTY'],
            ['district_code' => 120, 'county_code' => 127, 'county_name' => 'NAMISINDWA COUNTY'],
            ['district_code' => 121, 'county_code' => 181, 'county_name' => 'JONAM COUNTY'],
            ['district_code' => 122, 'county_code' => 49, 'county_name' => 'RUKIGA COUNTY'],
            ['district_code' => 123, 'county_code' => 30, 'county_name' => 'BUGWERI COUNTY'],
            ['district_code' => 124, 'county_code' => 202, 'county_name' => 'KAPELEBYONG COUNTY']
        );
    }
}
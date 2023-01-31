<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleApiController extends Controller
{
    public function fakultas()
    {
        return response()->json([
            'data' => [
                [
                    "id"=> 1,
                    "nama"=> "Ross Kirkland",
                    "deskripsi"=> "Minim dolor labore esse est nostrud nostrud pariatur exercitation. Exercitation aliquip aute non culpa sit amet deserunt amet voluptate exercitation commodo. Elit adipisicing eiusmod ad non Lorem ex ipsum ipsum cupidatat. Ad culpa incididunt laborum aute mollit duis consectetur. Tempor ad reprehenderit laboris anim officia sit ex sunt adipisicing excepteur excepteur culpa tempor non.\r\n"
                ],
                [
                    "id"=> 2,
                    "nama"=> "Josie Singleton",
                    "deskripsi"=> "Sunt consequat quis eiusmod laboris minim cillum aliquip Lorem magna elit enim. Commodo id velit Lorem est cupidatat officia Lorem ut sunt. Non adipisicing id do aute.\r\n"
                ],
                [
                    "id"=> 3,
                    "nama"=> "Tasha Maxwell",
                    "deskripsi"=> "Incididunt ad minim Lorem adipisicing pariatur do exercitation tempor in velit aliqua esse tempor. Nulla anim elit laborum magna consequat tempor exercitation ea exercitation ut est. Tempor pariatur quis velit culpa aliqua esse.\r\n"
                ],
                [
                    "id"=> 4,
                    "nama"=> "Haley Drake",
                    "deskripsi"=> "Ullamco exercitation aliqua aliquip commodo aliquip aute nulla commodo reprehenderit consectetur. Qui enim sint ea fugiat ipsum ex. Incididunt commodo ea ut ipsum in. Ex minim eu reprehenderit consequat aliquip nostrud nisi magna tempor cillum excepteur elit irure. Minim aute sit consequat ex dolore nisi est officia anim ea. Sint cupidatat consectetur minim occaecat veniam laborum elit. Sit nisi ea nostrud velit sint anim cupidatat.\r\n"
                ],
                [
                    "id"=> 5,
                    "nama"=> "Daniels Navarro",
                    "deskripsi"=> "Ullamco et tempor ea cupidatat officia. Dolore veniam reprehenderit Lorem eiusmod proident veniam proident adipisicing dolor eu veniam. Ut deserunt Lorem dolor reprehenderit cupidatat eiusmod. Velit fugiat exercitation elit veniam et id non commodo tempor officia esse. Lorem consequat sint aliqua cillum labore ad eu laboris est.\r\n"
                ],
                [
                    "id"=> 6,
                    "nama"=> "Buckley Rodriguez",
                    "deskripsi"=> "Do incididunt sit tempor officia ipsum commodo dolor eu eiusmod aute. Consectetur nulla nulla consequat consectetur ad non laborum laboris. Magna quis ad est velit adipisicing sunt eu ullamco cupidatat adipisicing cillum amet. Ea ullamco sunt culpa voluptate. Qui Lorem pariatur est dolore.\r\n"
                ],
                [
                    "id"=> 7,
                    "nama"=> "Molly Calderon",
                    "deskripsi"=> "Est nostrud do velit eiusmod laboris exercitation dolore. Lorem ea ullamco labore cupidatat minim officia sit cillum commodo eiusmod cillum tempor mollit nisi. Proident deserunt commodo et quis laboris excepteur excepteur ipsum est nulla eu voluptate amet.\r\n"
                ],
                [
                    "id"=> 8,
                    "nama"=> "Becky Duke",
                    "deskripsi"=> "Deserunt eu mollit amet excepteur voluptate irure duis ut incididunt. Enim voluptate sit proident minim aliqua mollit ullamco Lorem id non est officia. Veniam cupidatat reprehenderit qui exercitation irure magna aliqua officia minim ut ipsum fugiat.\r\n"
                ],
                [
                    "id"=> 9,
                    "nama"=> "Michael Harris",
                    "deskripsi"=> "Qui veniam veniam mollit qui minim elit ipsum sit id cupidatat. Proident proident nulla ex amet ex enim. Qui aliquip fugiat occaecat adipisicing. Velit id laborum est aliquip cupidatat mollit adipisicing velit. Fugiat id qui veniam magna nulla cillum aliquip aute.\r\n"
                ],
                [
                    "id"=> 10,
                    "nama"=> "Cantu Irwin",
                    "deskripsi"=> "Est pariatur nostrud ullamco excepteur do ut ipsum ex esse. Amet laboris ex tempor magna duis aute. Do eu amet commodo laborum ad Lorem nisi.\r\n"
                ]
            ]
        ]);
    }

    public function programStudi()
    {
        return response()->json([
            'data' => [
                [
                    "id"=> 1,
                    "nama_prodi"=> "Noemi Cox",
                    "deskripsi"=> "Qui ut id ea proident. Tempor in consectetur eiusmod commodo nulla dolor eiusmod dolor Lorem. Adipisicing nostrud officia laborum nostrud incididunt laborum ullamco qui cillum mollit culpa magna sunt ipsum.\r\n",
                    "jenjang"=> "Reyes",
                    "gelar_akademik"=> "Guthrie",
                    "id_fakultas"=> 1,
                    "nama_fakultas"=> "Yesenia Odonnell",
                    "nama_gelar_akademik"=> "Mcintosh Kramer"
                ],
                [
                    "id"=> 2,
                    "nama_prodi"=> "Hood Gamble",
                    "deskripsi"=> "Consequat officia commodo qui fugiat. Reprehenderit pariatur anim labore velit enim consequat nisi aute dolore officia do. In amet voluptate enim mollit amet eiusmod ad. Pariatur commodo aliquip nisi tempor in cupidatat aliquip non deserunt duis deserunt enim sunt.\r\n",
                    "jenjang"=> "Bond",
                    "gelar_akademik"=> "Vang",
                    "id_fakultas"=> 2,
                    "nama_fakultas"=> "Vazquez Holland",
                    "nama_gelar_akademik"=> "Winnie Oneil"
                ],
                [
                    "id"=> 3,
                    "nama_prodi"=> "Diann Romero",
                    "deskripsi"=> "Velit proident sit duis exercitation Lorem cupidatat. Aute eu anim laborum dolor. Excepteur consequat nulla id est esse cillum do tempor exercitation ex.\r\n",
                    "jenjang"=> "Turner",
                    "gelar_akademik"=> "Gibson",
                    "id_fakultas"=> 3,
                    "nama_fakultas"=> "Imelda Matthews",
                    "nama_gelar_akademik"=> "Ofelia Leonard"
                ],
                [
                    "id"=> 4,
                    "nama_prodi"=> "Florence Bass",
                    "deskripsi"=> "Tempor ut quis elit magna excepteur sunt nisi nostrud veniam culpa velit aliquip. Veniam consectetur deserunt culpa occaecat labore ea consequat. Culpa nulla proident enim aute. Commodo nulla labore proident voluptate ad proident officia esse adipisicing irure eiusmod velit. Mollit minim voluptate cillum aliqua nulla ullamco non incididunt sit voluptate esse nulla. Cupidatat pariatur ullamco aliquip et ex reprehenderit occaecat Lorem velit nulla et ipsum ut. Occaecat aliquip aute sint aliquip incididunt laborum laboris ut ea fugiat exercitation aliquip.\r\n",
                    "jenjang"=> "Sherman",
                    "gelar_akademik"=> "Faith",
                    "id_fakultas"=> 4,
                    "nama_fakultas"=> "Gilda Holloway",
                    "nama_gelar_akademik"=> "Bernard Sharp"
                ],
                [
                    "id"=> 5,
                    "nama_prodi"=> "Melendez Garrett",
                    "deskripsi"=> "Ea eiusmod incididunt laborum anim adipisicing sunt esse. Pariatur ut mollit et amet sint nisi. Adipisicing deserunt sunt pariatur culpa eiusmod velit aliquip laborum amet aliquip aute do veniam.\r\n",
                    "jenjang"=> "Francis",
                    "gelar_akademik"=> "Ursula",
                    "id_fakultas"=> 5,
                    "nama_fakultas"=> "Coleman Ayala",
                    "nama_gelar_akademik"=> "Gill Castillo"
                ],
                [
                    "id"=> 6,
                    "nama_prodi"=> "Carver Barr",
                    "deskripsi"=> "Nulla et cillum dolore cupidatat laboris minim culpa fugiat sit ex. Lorem laboris reprehenderit sunt culpa aute mollit. Sit laborum mollit nostrud sunt aliqua adipisicing mollit enim enim mollit proident esse. Tempor in est ea dolor in laboris reprehenderit incididunt elit dolore mollit enim esse nulla. Velit quis do nisi in proident culpa tempor.\r\n",
                    "jenjang"=> "Lambert",
                    "gelar_akademik"=> "Gordon",
                    "id_fakultas"=> 6,
                    "nama_fakultas"=> "Odom Levine",
                    "nama_gelar_akademik"=> "Ford Crosby"
                ],
                [
                    "id"=> 7,
                    "nama_prodi"=> "Tommie Quinn",
                    "deskripsi"=> "Qui aute ea consequat elit exercitation velit dolor. Irure qui enim veniam officia magna labore. Consectetur et eiusmod sint amet laboris sit dolor laboris duis ex Lorem nostrud do proident. Laboris minim est adipisicing do cillum quis. Nulla esse minim nostrud tempor. Eiusmod mollit nostrud velit Lorem labore anim anim eu.\r\n",
                    "jenjang"=> "Dominguez",
                    "gelar_akademik"=> "Phelps",
                    "id_fakultas"=> 7,
                    "nama_fakultas"=> "Alana Riley",
                    "nama_gelar_akademik"=> "Rose Mann"
                ],
                [
                    "id"=> 8,
                    "nama_prodi"=> "Waters Oneill",
                    "deskripsi"=> "Occaecat cupidatat proident consequat est consectetur do sit ea. Cupidatat enim esse veniam exercitation. Dolore pariatur cillum dolor consequat non cupidatat nostrud ex in. Veniam aliqua dolore nulla ipsum duis minim sint tempor commodo pariatur culpa dolor labore elit. Et incididunt minim dolore qui aliquip minim commodo nulla excepteur do exercitation qui. Mollit deserunt sunt non quis aute in laboris duis proident dolor ipsum nisi.\r\n",
                    "jenjang"=> "Christian",
                    "gelar_akademik"=> "Shirley",
                    "id_fakultas"=> 8,
                    "nama_fakultas"=> "Jasmine Cohen",
                    "nama_gelar_akademik"=> "Rosario Thompson"
                ],
                [
                    "id"=> 9,
                    "nama_prodi"=> "Anna Fisher",
                    "deskripsi"=> "Dolor elit sint id tempor deserunt aliqua dolore consequat do. Dolor elit do nisi laboris eiusmod nisi sit cupidatat ad consequat id incididunt. Ex non aliquip ex officia quis quis sit. Cillum dolore sit adipisicing magna labore incididunt consequat dolor labore tempor ut nulla.\r\n",
                    "jenjang"=> "Leblanc",
                    "gelar_akademik"=> "Walls",
                    "id_fakultas"=> 9,
                    "nama_fakultas"=> "Horton Lawson",
                    "nama_gelar_akademik"=> "Patrica Joseph"
                ],
                [
                    "id"=> 10,
                    "nama_prodi"=> "Cristina Medina",
                    "deskripsi"=> "Commodo dolor ad laboris cillum labore commodo aliquip et consectetur eu. Reprehenderit ipsum anim est sit elit elit est fugiat. Veniam elit et pariatur consequat ex enim. Laborum deserunt id consectetur ex fugiat est sit. Aliqua nostrud exercitation adipisicing consequat eu ea. Culpa deserunt occaecat aliqua aliqua anim voluptate cupidatat aliquip ipsum magna exercitation laboris nulla. Incididunt veniam est dolore enim officia velit ad anim do.\r\n",
                    "jenjang"=> "Church",
                    "gelar_akademik"=> "Kay",
                    "id_fakultas"=> 10,
                    "nama_fakultas"=> "Barnett Mcdaniel",
                    "nama_gelar_akademik"=> "Socorro Rollins"
                ]
            ]
        ]);
    }

    public function akreditas()
    {
        return response()->json([
            'data' => [
                [
                    "id"=> 1,
                    "nama_prodi"=> "Massey Lopez",
                    "detail_akreditas"=> "Cupidatat eiusmod ea adipisicing qui nostrud. Tempor deserunt excepteur adipisicing voluptate sunt irure. Labore eiusmod dolor nostrud officia mollit anim quis aute adipisicing irure deserunt aute eu. Esse esse enim minim magna nulla. Ullamco sit ex ut nulla. Qui excepteur nulla nisi minim labore est qui minim.\r\n",
                    "nilai"=> "Unggul",
                    "tgl_mulai"=> "15-03-2021",
                    "tgl_akhir"=> "23-06-2021",
                    "level"=> "International"
                ],
                [
                    "id"=> 2,
                    "nama_prodi"=> "Price Craig",
                    "detail_akreditas"=> "Deserunt et eiusmod in nulla aute aliqua consequat elit occaecat Lorem enim. Do cillum voluptate nisi anim Lorem laborum ullamco labore eiusmod officia deserunt consectetur. Labore nisi sint minim velit officia ea duis consectetur irure mollit nisi qui fugiat elit. Deserunt ut ut sit adipisicing occaecat fugiat reprehenderit reprehenderit aute.\r\n",
                    "nilai"=> "Unggul",
                    "tgl_mulai"=> "12-05-2022",
                    "tgl_akhir"=> "01-09-2021",
                    "level"=> "International"
                ],
                [
                    "id"=> 3,
                    "nama_prodi"=> "Lynn House",
                    "detail_akreditas"=> "Officia fugiat dolore enim labore. Veniam non dolor ullamco consequat aliquip dolor. Est proident do in consectetur. Esse commodo ullamco laboris reprehenderit enim ut proident qui Lorem laborum officia voluptate consectetur elit.\r\n",
                    "nilai"=> "Unggul",
                    "tgl_mulai"=> "29-05-2017",
                    "tgl_akhir"=> "28-02-2022",
                    "level"=> "International"
                ],
                [
                    "id"=> 4,
                    "nama_prodi"=> "Buchanan Melendez",
                    "detail_akreditas"=> "Pariatur labore tempor sint consectetur cillum nostrud. In in non nostrud ut deserunt occaecat. Et dolore cupidatat ut enim mollit incididunt. Pariatur ullamco nisi quis ea culpa sint.\r\n",
                    "nilai"=> "Unggul",
                    "tgl_mulai"=> "07-10-2021",
                    "tgl_akhir"=> "16-08-2020",
                    "level"=> "International"
                ],
                [
                    "id"=> 5,
                    "nama_prodi"=> "Deanna Johns",
                    "detail_akreditas"=> "Magna ea do elit non ipsum. Dolor mollit deserunt pariatur ea reprehenderit sunt aliqua fugiat duis. Laborum reprehenderit tempor ullamco dolor commodo mollit cillum exercitation magna veniam laboris et eu id. Et veniam et amet aliqua non. Esse do anim pariatur deserunt ullamco duis et laborum aute consectetur esse Lorem ipsum duis. Amet minim elit deserunt sit ea duis labore ex commodo veniam aliqua incididunt ipsum. Dolor consectetur ut velit quis sunt laboris officia dolor laboris sunt Lorem do.\r\n",
                    "nilai"=> "Unggul",
                    "tgl_mulai"=> "12-03-2022",
                    "tgl_akhir"=> "23-08-2015",
                    "level"=> "International"
                ],
                [
                    "id"=> 6,
                    "nama_prodi"=> "Weiss Holden",
                    "detail_akreditas"=> "Esse incididunt nulla ad consequat ad. Veniam eu in sunt elit deserunt nulla non labore esse. Ut ut mollit in tempor aute velit. Sunt nulla commodo esse enim non. Ea fugiat sint aute officia eu et ex dolore sint do proident consectetur. Proident nostrud irure sit deserunt exercitation irure adipisicing enim proident officia consectetur dolor proident nostrud. Duis eu duis et sit.\r\n",
                    "nilai"=> "Unggul",
                    "tgl_mulai"=> "24-02-2019",
                    "tgl_akhir"=> "11-11-2016",
                    "level"=> "International"
                ],
                [
                    "id"=> 7,
                    "nama_prodi"=> "Lori Bartlett",
                    "detail_akreditas"=> "Ea tempor Lorem magna magna ullamco deserunt amet. Minim commodo incididunt ea nulla nostrud duis. Veniam eiusmod eu officia deserunt eu ut occaecat esse excepteur reprehenderit in aliquip officia. Velit Lorem voluptate ullamco Lorem pariatur exercitation enim cillum ut sint adipisicing voluptate consectetur aute.\r\n",
                    "nilai"=> "Unggul",
                    "tgl_mulai"=> "30-01-2017",
                    "tgl_akhir"=> "22-03-2015",
                    "level"=> "International"
                ],
                [
                    "id"=> 8,
                    "nama_prodi"=> "Bell Beasley",
                    "detail_akreditas"=> "Cupidatat anim amet veniam sit proident. Laborum amet minim anim fugiat laboris sint reprehenderit occaecat pariatur ipsum culpa eu tempor. Dolore non in veniam adipisicing duis. Eiusmod Lorem duis incididunt et aute Lorem consequat veniam.\r\n",
                    "nilai"=> "Unggul",
                    "tgl_mulai"=> "22-04-2018",
                    "tgl_akhir"=> "25-04-2017",
                    "level"=> "International"
                ],
                [
                    "id"=> 9,
                    "nama_prodi"=> "Rosetta Huber",
                    "detail_akreditas"=> "Ut id velit mollit esse elit dolore magna. Enim proident ea elit tempor Lorem ex officia id sunt nostrud eiusmod sint fugiat exercitation. Nostrud adipisicing sint ut nostrud nisi. Fugiat aute proident proident enim minim aliquip. Do ullamco fugiat fugiat nisi eiusmod tempor laboris enim.\r\n",
                    "nilai"=> "Unggul",
                    "tgl_mulai"=> "31-05-2019",
                    "tgl_akhir"=> "13-06-2018",
                    "level"=> "International"
                ],
                [
                    "id"=> 10,
                    "nama_prodi"=> "Moore Lucas",
                    "detail_akreditas"=> "Lorem dolore elit enim esse aute proident qui id dolore. Mollit laborum magna et magna adipisicing proident velit. Pariatur labore voluptate voluptate ea est eiusmod amet et laborum Lorem. Nisi consectetur ipsum deserunt dolore ex ut. Non duis elit amet sunt id labore qui aute. Duis nostrud mollit ipsum adipisicing aute nisi minim ipsum nisi. Et culpa tempor cupidatat tempor cupidatat ea sit laboris duis tempor.\r\n",
                    "nilai"=> "Unggul",
                    "tgl_mulai"=> "06-11-2020",
                    "tgl_akhir"=> "14-11-2019",
                    "level"=> "International"
                ]
            ]
        ]);
    }
}

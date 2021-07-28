<?php

// if (isset($_POST['view'])) {
//     header("content-type: application/pdf");
//     ob_clean();
//     flush();
//     readfile('../../assets/Paul-Besliu-Resume.pdf');
// }

// if (isset($_POST['view'])) {

//     $pdffilename = '../../assets/Paul-Besliu-Resume.pdf';
//     header('Content-type: application/pdf');
//     header('Content-Disposition: inline; filename="' . $pdffilename . '"');
//     header('Content-Transfer-Encoding: binary');
//     header('Accept-Ranges: bytes');
//     ob_clean();
//     flush();
//     @readfile($pdffilename);
// }

// if (isset($_POST['view'])) {
//     ob_clean();
//     flush();
//     header("Content-type:application/pdf");
//     header("Content-Disposition:attachment;filename='../../assets/Paul-Besliu-Resume.pdf'");
//     echo $result;
//     exit;
// }


// if (isset($_POST['view'])) {
//     $pdffilename = '../../assets/Paul-Besliu-Resume.pdf';


//     if (file_exists($pdffilename)) {
//         header('Content-Description: File Transfer');
//         header('Content-Type: application/octet-stream');
//         header('Content-Disposition: attachment; filename="' . basename($pdffilename) . '"');
//         header('Expires: 0');
//         header('Cache-Control: must-revalidate');
//         header('Pragma: public');
//         header('Content-Length: ' . filesize($pdffilename));

//         readfile($pdffilename);

//     }
// }


if (isset($_POST['view'])) {
    $pdffilename1 = '../../assets/Paul-Besliu-Resume.pdf';
    $fileDir = __DIR__ . "/" . $pdffilename1;

    // header("Content-type:application/pdf");
    // header('Content-Disposition: inline; filename="' . $pdffilename2 . '"');
    // header('Content-Transfer-Encoding: binary');
    // header('Accept-Ranges: bytes');
    // ob_clean();
    // flush();
    // readfile($pdffilename1);
    var_dump(__DIR__ . "/" . $pdffilename1);
    var_dump(file_exists(__DIR__ . "/" . $pdffilename1));
    die;
}
$pdffilename1 = '../../assets/Paul-Besliu-Resume.pdf';
$fileDir = __DIR__ . "/" . $pdffilename1;

?>


<div class="resume-container">


    <button><a href="<?php echo $fileDir ?>   ">download resume</a></button>

    <div class="main-col">
        <h2>You can discover my Resume below.</h2>
        <br>
        <h3>When you click Resume to pop up resume</h3>

        <form action="" method="POST">
            <button name="view">View file PDF</button>
        </form>

        <br>
        <div class="row">
            <h3>test 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque voluptatum,
                animi non perferendis alias voluptate nesciunt minima recusandae impedit perspiciatis
                delectus porro sequi neque pariatur veniam officia quis aspernatur maxime!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque voluptatum,
                animi non perferendis alias voluptate nesciunt minima recusandae impedit perspiciatis
                delectus porro sequi neque pariatur veniam officia quis aspernatur maxime!
            </p>
            <h3>test 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque voluptatum,
                animi non perferendis alias voluptate nesciunt minima recusandae impedit perspiciatis
                delectus porro sequi neque pariatur veniam officia quis aspernatur maxime!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque voluptatum,
                animi non perferendis alias voluptate nesciunt minima recusandae impedit perspiciatis
                delectus porro sequi neque pariatur veniam officia quis aspernatur maxime!
            </p>
            <h3>test 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque voluptatum,
                animi non perferendis alias voluptate nesciunt minima recusandae impedit perspiciatis
                delectus porro sequi neque pariatur veniam officia quis aspernatur maxime!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque voluptatum,
                animi non perferendis alias voluptate nesciunt minima recusandae impedit perspiciatis
                delectus porro sequi neque pariatur veniam officia quis aspernatur maxime!
            </p>
            <h3>test 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque voluptatum,
                animi non perferendis alias voluptate nesciunt minima recusandae impedit perspiciatis
                delectus porro sequi neque pariatur veniam officia quis aspernatur maxime!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque voluptatum,
                animi non perferendis alias voluptate nesciunt minima recusandae impedit perspiciatis
                delectus porro sequi neque pariatur veniam officia quis aspernatur maxime!
            </p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque voluptatum,
                animi non perferendis alias voluptate nesciunt minima recusandae impedit perspiciatis
                delectus porro sequi neque pariatur veniam officia quis aspernatur maxime!
            </p>
        </div>
    </div>
</div>
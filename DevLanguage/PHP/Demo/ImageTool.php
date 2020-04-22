<?php

/**
 * 图形类工具
 * @author hurong
 */
class ImageTool
{

    public function convertImageToBase64($file)
    {
        $fp         = fopen($file, 'rb', 0);
        $encode_str = chunk_split(base64_encode(fread($fp, filesize($file))));

        if ($fp = fopen($file, "rb", 0)) {
            $gambar = fread($fp, filesize($file));
            fclose($fp);


            $base64 = chunk_split(base64_encode($gambar));
            // 输出
            $encode = '<img src="data:image/jpg/png/gif;base64,' . $base64 . '" >';
            file_put_contents("{$file}.e", $encode);
        }
    }

    public function convertRemoteImageToBase64($url)
    {
        $content = file_get_contents($url);
        $base64  = chunk_split(base64_encode($content));
        $encode  = '<img src="data:image/jpg/png/gif;base64,' . $base64 . '" >';
        file_put_contents(mt_rand(1, 100) . ".emoji", $encode);
    }
}
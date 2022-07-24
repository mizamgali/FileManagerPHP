<meta charset="utf-8"/>
<link rel="stylesheet" href="css_modules/file_table_style.css"/>

<div class="files-table">
        <table>
            <tr>
                <td>File Name</td>
                <td>Extention</td>
                <td>Create Time</td>
                <td>File Size</td>
                <td>Actions</td>
            </tr>

            <?php 
                //Создаем строки в таблице на основе полученных файлов
                foreach($files as $file){            
                    if($file == '.' || $file == '..') continue;

                    if (is_dir($dir.'/'.$file))
                        $file_link = '?path='.$dir.'/'.$file;
                    else
                        $file_link = $dir.'/'.$file;

                    //Variable: information about any file
                    $fileExt = get_extention($file);
                    $fileSize = get_filesize($dir.'\\'.$file);
                    $fileTime = date("d.m.y-h:i:s", filectime($dir.'\\'. $file));

                    
                    echo '<tr>
                        <td> <a href="'.$file_link.'">' . $file. '</a> </td>
                        <td>' .$fileExt. '</td>
                        <td>' .$fileTime. '</td>
                        <td>' .$fileSize. '</td>      
                        <td>
                            <div class="actions">
                                <a href="scripts/deleteFile.php?file='.$dir.'/'.$file.'"><img src="../img/delete_icon.png" width="20px"></a>
                            </div>
                        </td>
                    </tr>';
                }
            ?>
        </table>
</div>
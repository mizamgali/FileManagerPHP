<?php
        
        function get_extention($file) {
            $filesplit = explode(".", $file);
            return end($filesplit);
        }

        function get_filesize($file)
        {
            if(!file_exists($file)) return "Файл не найден";
        
            $filesize = filesize($file);
        
            if($filesize > 1024){
                $filesize = ($filesize/1024);
                
                if($filesize > 1024){
                    $filesize = ($filesize/1024);
                    
                    if($filesize > 1024) {
                        $filesize = ($filesize/1024);
                        $filesize = round($filesize, 1);
                        return $filesize." ГБ";       
                    } else {
                        $filesize = round($filesize, 1);
                        return $filesize." MБ";   
                    } 

                } else {
                    $filesize = round($filesize, 1);
                    return $filesize." Кб";   
                }  

            } else {
                $filesize = round($filesize, 1);
                return $filesize." байт";   
            }
        }
        ?>
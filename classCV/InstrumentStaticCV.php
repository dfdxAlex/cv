<?php
namespace classCV;

// класс с общими статическими методами
class InstrumentStaticCV
{
    // запуск функции при событии Load
    static function loadFunctionEventLoad($f)
    {
        echo "
        <script>
            if (typeof $f == 'function')
                window.addEventListener('load', $f, false);
        </script>
        ";
    }

    // запуск функции при событии Click
    static function loadFunctionEventClick($f)
    {
        echo "
        <script>
            if (typeof $f == 'function')
                window.addEventListener('click', $f, false);
        </script>
        ";
    }

    // Функция меняет стиль при создании CV, подставляет стили из настроек вместо стилей из таблицы CSS
    static function listSkillFontSetup()
    {
            // найти ДИВ который держит в себе один из списка Скилов скил и задать ему стиль
            echo "<script>
                    function listSkillFontSetup()
                    {
                        name1=document.getElementsByClassName('skills');
                       
                        for (zzz in name1) 
                            if (typeof name1[zzz]=='object')
                                name1[zzz].style.fontSize = '{$_SESSION['font_size_skill_list']}px';
                        
                    }
                  </script>";
    }

    static function listSkillRowSetup()
    {
            // найти ДИВ который держит в себе один из списка Скилов скил и задать ему стиль
            echo "<script>
                    function listSkillRowSetup()
                    {
                        name1=document.getElementsByClassName('skills');
                       
                        for (zzz in name1) 
                            if (typeof name1[zzz]=='object')
                                name1[zzz].style.lineHeight = '{$_SESSION['row_size_skill_list']}px';
                        
                    }
                  </script>";
    }

    


}

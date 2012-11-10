$(document).ready(function()

          {

                     var de_inlocuit = [/!C/gi, /!D/gi,/!H/gi,/!S/gi/*,/(?<=[0-9])[CDHS]/g*/];

           var replace = ['<img src="/sites/default/files/c.gif"/>', '<img src="/sites/default/files/d.gif"/>','<img src="/sites/default/files/h.gif"/>','<img src="/sites/default/files/s.gif"/>','test' ];

           //<img src="/sites/default/files/c.gif"/>

          var i=0;

          for (i=0; i < de_inlocuit.length; i++)

           {

            $('body table tr td').replaceText( de_inlocuit[i], replace[i] );

           } 

          

          });
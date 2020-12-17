day=new Date()
            m=day.setMonth()
            if(m>=3 && m<6) { 
            document.write('<body background="img/봄.jpg">')
            }
            else if(m>=6 && m<9) { 
            document.write('<body background="img/여름.jpg">')
            }
            else if(m>=9 && m<12) { 
            document.write('<body background="img/가을.jpg">')
            }
            else if (m=12 || m<3) { 
            document.write('<body background="img/겨울.jpg">')
            }

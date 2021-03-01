let loker = document.getElementById('loker');


function lantai(a) {  
        if(a % 4 === 1) {
            let floor = Math.floor(a/4);
            let b=21;
            let c=(floor*b) + 9;
            document.writeln(`lantai ${a} terdiri atas`);
            document.write('<br>');
            for(let i = (floor * b) + 1 ; i <= c ; i++){
                console.log(`lantai ${a} loker ${i}`);
                document.writeln(`loker ${i}`);
                document.write('<br>');
            }
        }

        if(a % 4 === 2) {
            let floor = Math.floor(a/4);
            let b=21;
            let c=(floor*b) + 3;
            document.writeln(`lantai ${a} terdiri atas`);
            document.write('<br>');
            for(let i = (floor * b) + 10; i <= (c + 9) ; i++){
                console.log(`lantai ${a} loker ${i}`);
                document.writeln(`loker ${i}`);
                document.write('<br>');
            }
        }

        if(a % 4 === 3) {
            let floor = Math.floor(a/4);
            let b=21;
            let c=(floor*b) + 7;
            document.writeln(`lantai ${a} terdiri atas`);
            document.write('<br>');
            for(let i = (floor * b) + 13; i <= (c + 12) ; i++){
                console.log(`lantai ${a} loker ${i}`);
                document.writeln(`loker ${i}`);
                document.write('<br>');
            }
        }

        if(a % 4 === 0) {
            let floor = Math.floor(a/4) - 1;
            let b=21;
            let c=(floor*b) + 2;
            document.writeln(`lantai ${a} terdiri atas`);
            document.write('<br>');
            for(let i = (floor * b) + 20; i <= (c + 19) ; i++){
                console.log(`lantai ${a} loker ${i}`);
                document.writeln(`loker ${i}`);
                document.write('<br>');
            }
        }
}
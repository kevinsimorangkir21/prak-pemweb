function hitung() {
            const inputElement = document.getElementById('inputNumber');
            const number = parseInt(inputElement.value);

            if (number <= 0 || isNaN(number)) {
                alert("Masukkan bilangan bulat positif yang valid!");
                return;
            }

            let jumlahGanjil = 0;
            let jumlahGenap = 0;

            for (let i = 1; i <= number; i++) {
                if (i % 2 === 0) {
                    jumlahGenap++;
                } else {
                    jumlahGanjil++;
                }
            }

            const resultElement = document.getElementById('result');
            resultElement.innerHTML = `Hasil :`;
            resultElement.innerHTML = `Jumlah bilangan ganjil: ${jumlahGanjil}`;
            resultElement.innerHTML = `Jumlah bilangan genap: ${jumlahGenap}`;
        }
const daftarTugas = document.querySelector("#daftarTugas");
const tombol = document.querySelector("#tombolAdd");
const inputTugas = document.querySelector("#inputTugas");

let daftarDataTugas = JSON.parse(
    localStorage.getItem("daftarDataTugas")
) || [];

daftarDataTugas = daftarDataTugas.map(function(item) {
    if (item === "string") {
        return {
            teks: item,
            selesai: false
        }
    }

    return item;
});

function simpanTugas() {
    localStorage.setItem(
        "daftarDataTugas",
        JSON.stringify(daftarDataTugas)
    )
}

function tampilkanTugas(item) {
    const tugasBaru = document.createElement("li");

    const checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    checkbox.checked = item.selesai;

    const teksTugas = document.createElement("span");
    teksTugas.textContent = item.teks;

    const tombolHapus = document.createElement("button");
    tombolHapus.textContent = "remove";

    teksTugas.classList.toggle("selesai", item.selesai);

    checkbox.addEventListener("change", function(){
        item.selesai = checkbox.checked;
        teksTugas.classList.toggle("selesai",item.selesai);
        simpanTugas();
    });

    tombolHapus.addEventListener("click", function(){
        daftarDataTugas = daftarDataTugas.filter(function(tugas){
            return tugas !== item;   
        })

        simpanTugas();
        tugasBaru.remove();
    })

    tugasBaru.appendChild(checkbox);
    tugasBaru.appendChild(teksTugas);
    tugasBaru.appendChild(tombolHapus);

    daftarTugas.appendChild(tugasBaru);
}

function tambahTugas() {
    const teks = inputTugas.value.trim();

    if(teks === "") {
        return;
    }

    const tugasBaru = {
        teks: item,
        selesai: false
    }

    daftarDataTugas.push(tugasBaru);
    simpanTugas();
    tampilkanTugas(tugasBaru);

    inputTugas.value = "";
    inputTugas.focus();

}

tombol.addEventListener("click", function(){
    tambahTugas();
});

tombol.addEventListener("keydown", function(event) {
    if(event.key === "Enter"){
        tambahTugas();
    }
});

simpanTugas();

for(let item of daftarDataTugas) {
    tampilkanTugas(item);
}
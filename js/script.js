const baner = document.getElementById('baner');
const hideBtn = document.getElementById('hide-btn');
const infoBanerMsg = document.getElementById('info-baner');
let date;

hideBtn.onclick = () => {
  baner.style.display = 'none';
  date = new Date();
  date.setMonth(date.getMonth() + 1);
  document.cookie = 'openDate=' + date;
  console.log(date.toLocaleDateString());

  infoBanerMsg.style.display = 'block';
  setTimeout(() => {
    infoBanerMsg.style.display = 'none';
  }, 5000);
};

const cookieDate = document.cookie.match(new RegExp('(^| )' + 'openDate' + '=([^;]+)'));

if (cookieDate[2] == new Date()) {
  baner.style.display = 'block';
}

const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

let mainLoopId = 0;

function drawImageActualSize() {
  ctx.drawImage(
    image, // スプライト画像
    0, // どの列を使うか
    0, // どの行を使うか
    128, // 切り出すサイズ(width)
    128, // 切り出す幅(height)
    100, // 書き出すx座標
    300, // 書き出すy座標
    128, // 表示サイズ(width)
    128 // 表示サイズ(height)
  );
}

window.onkeydown = (event) => {
  if (event.code === "ArrowRight") {
    console.log("右が押された");
    fukurou1.walk(event.code);

  } else if (event.code === "ArrowLeft") {
    console.log("左が押された");
    fukurou1.walk(event.code);

  }
}

onkeyup = (event) => {

  if (event.code === "ArrowUp") {
    console.log("上が押された");
    // fukurou1.y = fukurou1.y - 60;
    fukurou1.jump();
  }
};

new Fukurou; //インスタンス作成
let fukurou1 = new Fukurou(54, 300);
fukurou1.draw(); //fukurou 描画

new Hinotama; //インスタンス作成
let hinotama1 = new Hinotama(1020, 310);
hinotama1.draw(); //Hinotama 描画

mainLoop();

function mainLoop() {
  ctx.clearRect(0, 0, 5000, 5000);
  fukurou1.update();
  hinotama1.update();
  // console.log(hinotama1.x);
  // console.log(fukurou1.x);
  if (fukurou1.died) {
    // return;
  }
  mainLoopId = window.requestAnimationFrame(mainLoop);

}



const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
const image = new Image();
image.src = './img/owl.png';

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
// var input_key_buffer = new Array();

// window.addEventListener("keydown", handleKeydown);

// function handleKeydown(e) {
//   e.preventDefault();
//   input_key_buffer[e.keyCode] = true;
// }

// window.addEventListener("keyup", handleKeyup);

// function handleKeyup(e) {
//   e.preventDefault();
//   input_key_buffer[e.keyCode] = false;
// }


window.onkeydown = (event) => {

  if (event.code === "ArrowRight") {
    console.log("右が押された");
    fukurou1.x = fukurou1.x + 10;

  } else if (event.code === "ArrowLeft") {
    console.log("左が押された");
    fukurou1.x = fukurou1.x - 10;
  } else if (event.code === "ArrowUp"){
    console.log("上が押された");
    // fukurou1.y = fukurou1.y - 60;
    fukurou1.jumpFlag = true;
    fukurou1.vy = -10;
    fukurou1.jump();
  }
};


class Fukurou {
  constructor(x, y) {
    console.log({
      x,
      y
    })
    // = console.log({x:x,y:y})
    this.x = x;
    this.y = y;
    this.vy = 0;
    this.jumpFlag = false;
    this.column = 0;
    this.row = 0;
    // let hoge='hello';

  }
  draw() {
    // image.onload = () => {
    ctx.drawImage(
      image, // スプライト画像
      this.column * 128, // どの列を使うか
      this.row * 128, // どの行を使うか
      128, // 切り出すサイズ(width)
      128, // 切り出す幅(height)
      this.x, // 書き出すx座標
      this.y, // 書き出すy座標
      128, // 表示サイズ(width)
      128 // 表示サイズ(height)
    );
    // }
  }

  jump() {

    // if (input_key_buffer[39]) {
    //   this.x = this.x + 10;
    //   if (this.x % 5 === 0) {
    //     column = column + 1;
    //     if (column > 1) {
    //       column = 0;
    //     }
    //   }

    // } else if (input_key_buffer[37]) {
    //   this.x = this.x - 10;
    //   if (this.x % 5 === 0) {
    //     column = column + 1;
    //     if (column > 1) {
    //       column = 0;
    //     }
    //   }
    //   console.log('column:' + column);
    // } else if (input_key_buffer[38]) {
    //   this.vy = -7;
    //   this.jumpFlag = true;
    //   column = column + 1;
    //   if (column > 3) {
    //     column = 0;
    //   }
    // }

    if (this.jumpFlag) {
      // 上下方向は速度分をたす
      this.y = this.y + this.vy;

      // 落下速度はだんだん大きくなる
      this.vy = this.vy + 0.5;
    }


    if (this.y + 53 > 353) {
      this.y = 353 - 53;
    }
  }

  update() {
    if (this.jumpFlag){
      this.jump();
    }
    this.draw();
  }

  displayPosition() {
    console.log(this.x)
    console.log(hoge)

  }
}


new Fukurou; //インスタンス作成
let fukurou1 = new Fukurou(50, 300);
fukurou1.draw(); //fukurou 描画

// window.requestAnimationFrame(mainLoop);

mainLoop();

function mainLoop() {
  ctx.clearRect(0, 0, 5000, 5000);
  // console.log('requestAnimationFrame');
  // fukurou1.this.x += 2;
  fukurou1.update();
  window.requestAnimationFrame(mainLoop);

}
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
    fukurou1.walk(event.code);

  } else if (event.code === "ArrowLeft") {
    console.log("左が押された");
    fukurou1.walk(event.code);

  }
}

window.onkeyup = (event) => {

  if (event.code === "ArrowUp") {
    console.log("上が押された");
    // fukurou1.y = fukurou1.y - 60;
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
    this.frameCount = 0;
    // this.directions = 'up';
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
    if(this.jumpFlag){
      return;
    }
    this.jumpFlag = true;
    this.vy = -21;
    this.column = 2;
    console.log("jump");

  }

  update() {
    this.frameCount += 1;
    if (this.jumpFlag) {
      //   this.jump();
      if (this.frameCount > 8) {

        if (this.column === 2) {
          this.column = 3;
        } else if(this.column === 3){
          this.column = 2;
        }
        this.frameCount = 0;
      }
      this.y = this.y + this.vy;
      this.vy = this.vy + 1.2;
      if (this.y > 300) {
        this.y = 300;
        this.jumpFlag = false;
      }

    } else {
      if (this.frameCount>8){
        this.column = this.column + 1;
        if (this.column > 1) {
          this.column = 0;
        }
        this.frameCount =0;
      }


    }
    this.draw();
  }

  displayPosition() {
    console.log(this.x)
    console.log(hoge)

  }


  walk(code) {
    if (code === "ArrowRight") {
      this.x = this.x + 10;

    }
    if (code === "ArrowLeft") {
      this.x = this.x - 10;

    }

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
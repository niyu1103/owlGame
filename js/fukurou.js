class Fukurou extends gameObject {
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
    this.died = false;
    this.hitFlag = false;
    this.image = new Image();
    this.image.src = './img/owl.png';

  }
  draw() {
    // image.onload = () => {
    ctx.drawImage(
      this.image, // スプライト画像
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
    if (this.jumpFlag) {
      return;
    }
    this.jumpFlag = true;
    this.vy = -21;
    this.column = 2;
    console.log("jump");

  }

  update() {
    this.isHit();
    this.frameCount += 1;
    if (this.jumpFlag) {
      //   this.jump();
      if (this.frameCount > 8) {

        if (this.column === 2) {
          this.column = 3;
        } else if (this.column === 3) {
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
      console.log('died前');
      if (this.died) {
        console.log('died');
        console.log(this.column);
        console.log(this.frameCount);
        if (this.frameCount > 8) {
          if (this.column === 2) {
            this.column = 3;
            console.log('column2です');
          } else if (this.column === 3) {
            this.column = 2;
            console.log('column3です');
          }
          this.frameCount = 0;
        }
      }
      // if (this.frameCount > 8) {
      //   this.column = this.column + 1;
      //   if (this.column > 1) {
      //     this.column = 0;
      //   }
      //   this.frameCount = 0;
      // }
    }

    this.draw();
  }
  //火の玉との距離を調べる
  isHit() {
    let distanceX = Math.abs(this.x + 64 - hinotama1.x + 50);
    let distanceY = Math.abs(this.y - hinotama1.y);
    if (distanceX <= 5) {
      console.log(fukurou1.y);
      if (distanceY <= 130) {
        console.log('hit!!');
        this.hitFlag = true;
      }
    }
    console.log(this.hitFlag);
    if (this.hitFlag) {
      fukurou1.die();
    }
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
    console.log(this.x);
  }

  die() {
    this.row = 1;
    // if (this.frameCount > 8) {
    this.column = this.column + 1;
    if (this.column > 3) {
      this.column = 3;
    }
    // this.frameCount = 0;
    this.died = true;
    // cancelAnimationFrame(mainLoopId);
    // }
  }
}

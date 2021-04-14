

class Hinotama {
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
    this.image = new Image();
    this.image.src = './img/hinotama.png';
  }
  draw() {
    ctx.drawImage(
      this.image, // スプライト画像
      this.x, // 書き出すx座標
      this.y, // 書き出すy座標
      100, // 表示サイズ(width)
      100 // 表示サイズ(height)
    );
  }
  update() {
    if (fukurou1.hitFlag) {
      return;
    }
    this.frameCount += 1;
    if (this.frameCount > 0) {
      if (this.x < -120) {
        this.x = 1024
      }
      this.x = this.x - 10;
      this.frameCount = 0;
    }
    this.draw();

    console.log(this.y);

  }
  reuse() {

  }
}
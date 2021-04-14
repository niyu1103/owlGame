class gameObject(image) {
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
    this.image.src = ;
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
}
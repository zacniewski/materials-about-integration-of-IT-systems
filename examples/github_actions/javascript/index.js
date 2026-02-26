function add(a, b) {
  return a + b;
}

module.exports = { add };

if (require.main === module) {
  console.log(`2 + 3 = ${add(2, 3)}`);
}

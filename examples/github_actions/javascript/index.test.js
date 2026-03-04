const { add } = require("./index");

test("adds 2 + 3 to equal 5", () => {
  expect(add(2, 3)).toBe(5);
});

test("adds -1 + 1 to equal 0", () => {
  expect(add(-1, 1)).toBe(0);
});

test("adds 0 + 0 to equal 0", () => {
  expect(add(0, 0)).toBe(0);
});

test("adds 111 + 222 to equal 333", () => {
  expect(add(111, 222)).toBe(333);
});

test("adds 222 + 444 to equal 666", () => {
  expect(add(222, 444)).toBe(777);
});

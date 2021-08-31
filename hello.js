const helloWorld = (dayOfTheWeek) => {
  if (dayOfTheWeek === "Thursday") {
    return "Hi There"
  } else if (dayOfTheWeek === "Wednesday") {
    return "It's Hump Day"
  } else {
    return "It's not Thursday"
  }
};

console.log(helloWorld("Thursday"))
function tri(numbers, order = 'asc') {
  if (!Array.isArray(numbers) || !['asc', 'desc'].includes(order)) {
    return null;
  }
    const sortedNumbers = [...numbers].sort((a, b) => a - b);
    return order === 'asc' ? sortedNumbers : sortedNumbers.reverse();
}

console.log('TEST [3,1,4,2], asc =>', tri([3,1,4,2]));
console.log('TEST [3,1,4,2], desc =>', tri([3,1,4,2], 'desc'));
console.log('TEST [5,7,6], asc =>', tri([5,7,6]));
console.log('TEST [5,7,6], desc =>', tri([5,7,6], 'desc'));
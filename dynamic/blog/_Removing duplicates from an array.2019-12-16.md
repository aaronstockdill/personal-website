# Removing duplicates from an array

Chris Coyer from [CSS Tricks linked](https://css-tricks.com/snippets/javascript/remove-duplicates-from-an-array/)
to a post by [Svein Petter Gjøby](https://javascript.christmas/2019/3)
on removing duplicates from an array in JavaScript.
The methods are all interesting, but none the pros and cons of each approach were barely mentioned!
When developing, readability is king, and Svein did address this.
But good code is fast code,
and it is worth exploring what exactly is happening in each case.

All examples use the following array as an example:
```javascript
const array = [1, 1, 1, 3, 3, 2, 2];
```
For the sake of narrative,
lets work through the sninppets backwards.

## Filtering

## Reducing

## Using a set

The first code snippet is
```javascript
const unique = [...new Set(array)];
```
which exploits the uniqueness of elements in sets.
A new set is created from the array,
then this set is made back into an array using spread syntax.

While the exact time complexity of this approach is up to the implementation in each JavaScript engine,
we can make some broad assumptions.
The central assumption is that sets are almost certainly backed by hash tables.
This means we have $O(1)$ insert,
$O(1)$ retrieval, and $O(n)$ iteration.
Thus we have $n \cdot O(1) = O(n)$ time to construct the set,
then $O(n)$ time to convert it back to an array,
for a total $O(n) + O(n) = O(n)$ time deduplication. Nice!

If sets are backed by a tree, we have $O(\log n)$ insert and retrieval,
and the whole operation becomes $O(n \log n)$.

Because of how sets are specified in JavaScript,
this is order-preserving on the first occurence of each value.
This is unusual among programming languages, but is useful here.
If this were not the case,
we would need to be more clever.
Specifically we would need to perform a counting sort on the output array
where the mapping from values to natural numbers
is given by the first index in the original list. 
Naively we can just request the index each time (à la the filtering approach)
but as we saw above this will not scale.

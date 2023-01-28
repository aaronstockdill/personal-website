# Algorithms for Intelligence: Searching

> This is the first in a series of posts outlining
> the basics of artificial intelligence. These posts
> aim to be suitable for a general audience without
> specific experience in computer science or artificial
> intelligence. Instead, I hope to illuminate how
> artificial intelligence is not magic&mdash;it is
> quite the opposite, in fact; like any set of algorithms,
> artificial intelligence algorithms are a specific
> set of rules for computers to follow.

Hunting for that recipe you loved
and could have sworn you added to your binder.
Driving to that new yoga class which said it was ten minutes down the road
but you&rsquo;ve been looking for twenty minutes already.
Looking for your keys as you leave in the morning because *oh my god you cannot be late again*.
All tasks that happen on a regular basis;
all involve searching.

Searching is a result of the way we store things:
if libraries just threw all the books in randomly,
no one would be able to find anything.
Other times we have no better choice;
to find our way from origin to destination on a map
requires us to search for the correct route.
This means that searching can be categorised
not just by how we search,
but *what* we search.

Broadly,
we might consider three ways of storing things:
lists, trees, and graphs.
These are not actually three distinct things&mdash;lists
are trees, and trees are graphs&mdash;but
each developed largely independently of the other.

A list is familiar to everyone: there is a first thing,
followed by a second thing, then a third thing,
and so on until you reach the last thing.
(If there is no last thing, we call a list a *stream*.
The rules for searching a stream are a bit different,
and are not really worth worrying about:
you are unlikely to have infinite books to look through.)
Alternatively, we can consider a list *recursively*:
a list is either empty, or it is something followed by another list.
We might represent this on a computer (using the language [Haskell](https://www.haskell.org)) as:

    data List a = []
                | a:(List a)

Here `a` denotes the *type* of list we have:
a list of numbers, or books, or aliens.
Because we do not know in advance, we call it `a`.
The pipe (`|`) is &ldquo;or&rdquo;, so the list is empty (`[]`)
*or* it is made of some `a` joined with a list of `a`s.
The `:` is pronounced  *cons*, and is the typical Haskell syntax;
the name comes from &ldquo;**cons**truct&rdquo;.

A tree is not just a tall bush.
In computer science,
a tree is made of *nodes* (sometimes called *vertices*),
and each node has some *children*;
when viewed from the perspective of the children,
this node is a *parent*.
As the terminology would suggest,
family trees are&mdash;usually&mdash;trees.
A child cannot ever have a lineage of children that lead back to its parent;
this seems sensible enough.
There is also no way for the lineage of two siblings to result in a common offspring;
again, this is what we would *expect* family trees to do,
although many royal families produce distinctly no-tree-like shapes.
We set the requirement that a child have only a single parent;
our families reproduce through mitosis, it seems.
Finally, we demand that nodes not be parents of their siblings;
Oedipus aside, this is also seen in family trees.
These four conditions are summarised as *acyclity*
(that is, trees are *without cycles*).

Trees could also be considered as a deformed list.
(Or: lists are a very simple tree.)
Rather than a value being followed by one other list,
there might be a few different choices of list after it.
Think of it like a choose-your-own-adventure book:
each page is no longer followed by the next,
you have a choice of which story to continue with.
A tree of this manner would appear in code as

    data Tree a = Leaf
                | Node a (List (Tree a))

When you reach the end of the branch of a tree, what do you find? A leaf.
We store the choices for the trees we could continue with in a list.

If there were a fixed number of choices, we could make this simpler.
A common scenario is to have two choices:
yes/no, left/right, true/false, zero/one.
We call such a tree a *binary tree*, and would create it with

    data BinaryTree a = Leaf
                      | Node a (Tree a) (Tree a)

Because the number of choices is fixed, we can just write them all out,
rather than keeping them in a list.
Because binary trees are so common,
we have many dedicated algorithms for them.

The last of the &ldquo;big three&rdquo; is the graph.
This is not your high school teacher's graph,
instead these are what *real mathematicians*&trade; call graphs.
(What we called graphs in school are more accurately
*charts*, for statistics,
or *plots*, for showing functions, e.g., \\(y = f(x)\\).)
A graph is a collection of nodes that are connected to each other
by edges between node pairs.
Equivalently, graphs are trees *with* cycles&mdash;or more accurately,
a tree is a graph without cycles.
Graphs are used to represent just about every relationship we deal with
in artificial intelligence;
for example,
maps are actually graphs where intersections are nodes
and roads are edges.

Considering the road metaphor,
we see that not all edges are created equal.
Some roads are long, others short;
some let you go fast while others have low speed limits.
These can be captured as *weights*,
a value that tells us how costly it is to move along an edge.

There are many, many ways to represent graphs on a computer.
The most simple, but not widely used, is as a pair of lists:
the first list contains the node labels,
the second the edges (which are pairs of node labels).

    data Graph a = (List a, List (a, a))

If the graph is weighted, we might represent edges not as pairs
but as triples, where the third element is the weight.

A more common representation for graphs is the *adjacency list*,
which associates each node with a list of nodes it is connected to.

    data Graph a = Map a (List a)

Extending this to a weighted graph is a simple exercise.


A `Map` is like a dictionary:
you can jump (*index*) to the right word (*key*) quickly
to find the definition (*associated value*).
An example of a map between English and French numbers
(that is, `Map English French`)
might be

    Map.fromList [
        ('One', 'Un'),
        ('Two', 'Deux'),
        ('Three', 'Trois')
    ]


Lists, trees, and graphs represent the bulk of
data storage techniques in artificial intelligence.
Other structures such as databases exist,
and are widely used,
but are specialised and have very technical and complicated algorithms
that work to make them super fast,
but not very flexible.
There are also more flexible structures such as hypergraphs,
but these are uncommon
so we will not concern ourselves with them.


## Searching lists
Searching lists is not usually considered artificial intelligence,
but I start here because the line of what *is* artificial intelligence
is blurry at best.
The line is more a function of time than ability&mdash;that
is to say, the older the algorithm is,
the less likely it is to be considered artificial intelligence.
This is most apparent when we consider the graph search algorithms.

The simplest way to search a list is to pick an element at random,
and check if that is what we are looking for.
(In fact, this is a valid way to search anything.)
Take a bag filled with marbles, all red except for a single blue one.
If we have 30 marbles in the bag and we want to be 95% sure we find it,
we need to pick out&hellip; 88 marbles.
That's almost three times as many marbles than are in the bag.
How did this happen?

    -- "randomness" is messy in Haskell,
    -- so this code will not actually work
    randomSearch list value = if (randomChoiceFrom list == x)
                              then True
                              else randomSearch list value

For a list of \\(n\\) items, the chance of picking it first time is \\(1/n\\)
(we will assume that we are equally likely to pick any one thing).
The chance of picking it the second time is
\\[
    \frac{1}{n}\left(1 - \frac{1}{n}\right).
\\]
Generalising this, the chance of getting it right on the \\(k\\)th attempt is
\\[
    \frac{1}{n}\left(1 - \frac{1}{n}\right)^{k-1}.
\\]
We can read this as making \\(k-1\\) wrong choices,
and then the right one on the \\(k\\)th go.

The probability \\(p\\) we have found what we are looking for after \\(b\\) attempts is
\\[
    p = 1 - \left(1 - \frac{1}{n}\right)^b
\\]
Rearranging for \\(b\\) tells us how many attempts we need
for a given probability.
Unfortunately, setting \\(p=1\\) (i.e., guaranteed success)
requires infinite attempts!
Worse,
there is no hope at all of ever stopping if the marble is not in the bag.
How would we know?
Maybe we just never picked the right marble?
So this is a pretty poor way of searching through the bag.

We could attempt the same strategy but not put the marbles back in the bag.
Obviously this is better,
because the worst case scenario is that we take out every red marble
until the only one left is the blue marble.
But then we should ask the question,
why are we doing this randomly?

If we are searching a list,
then we already have some order for the elements.
This order may already be random,
in which case it is exactly the same as picking them out randomly.
We can look at the first thing,
and check if it what we are looking for:
if yes, we are done;
if not, we should try again with the next thing.

    linearSearch [] _ = False
    linearSearch (head:tail) value = if (head == value)
                                     then True
                                     else linearSearch tail value

There is quite a bit going on in this code snippet,
so let us break it down.
First, notice that we defined `linearSearch` *twice*:
first for when the list is empty, in which case the answer is always `False`;
the second time is for the more general case.
In this general case,
we have split the list using the `:` separator from our earlier definition
into two parts usually called the *head* and the *tail*&mdash;<!--
-->the same names as I have chosen here.
Think of it like a snake:
it has a head,
and then the rest of its body could be thought of as a tail.

(Our snake has an interesting trick:
once you remove the head, whatever bit was next is now called the head.)

So how quickly can we search the list this time?
Well, we could get lucky and it is the first thing in the list.
Or we could get really *un*lucky,
and it is the last thing.
But most of the time,
the item will be somewhere in the middle.

We can look at this a bit more carefully,
again using probability.
For simplicity,
we will assume that the thing we want is in the list.
If there are \\(n\\) items,
how likely is it that what we are looking for is the first thing?
Well, if it is truly a randomly ordered list,
then \\(1/n\\).
And how likely is it to be in the second spot?
Same again, \\(1/n\\).
The chance of the something being in the \\(i\\)th spot
would be the same too.

Now, how much work do we have to do to find each thing?
Well,
if it is in the first spot, we checked just one thing.
If it is in the second spot, we checked two things.
And in the \\(i\\)th spot? That would be \\(i\\) checks.
If we want to find out we the *expected* number of checks we need to make,
then we use the *expectation* formula:
\\[
    E[C] = \sum_{i=1}^{n} i \times \frac{1}{n}.
\\]
Simplifying this down,
we determine that the expected number of checks is \\((n+1)/2\\).

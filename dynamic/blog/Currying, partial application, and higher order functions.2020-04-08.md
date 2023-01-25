# Currying, partial application, and higher order functions

Functional programming has come into fashion
due to -- surprisingly -- Javascript.
For my purposes,
functional programming is programming which emphasises
immutability[^1] (variables are set once, then cannot be changed)
and functional composition (functions are small and general, and then joined together to solve bigger problems).[^2]

One further feature I wish to highlight,
which is not necessary for functional programming,
is a type system from the Hindley-Milner tradition.
HM type systems are almost always found in functional programming languages,
and provide a useful notation for us to use when talking about currying, partial application, and higher order functions.

We will start with the HM type system,
then look at higher order functions,
before exploring currying and partial application.
These final two concepts are frequently muddled.
They often occur together, but are not the same thing!
In this post I want to tease them apart,
and perhaps illustrate why you might like to bring these ideas into your own code.

## Hindley-Milner types

The Hindley-Milner rabbit hole runs deep,
and has many interesting twists and turns.
The type inference algorithms are more than a post in themselves,
so here we take the inference as a black box,
and write the types where we wish to make them clear.
Further, the power of true sum types is a revelation in code cleanliness;
again, we must bypass this detour.
Instead, we will consider three features:
ground types, function types, and type variables.

In the HM tradition, types are written post-fix,
separated by a colon.
The familiar Algol-style notation for typing would be `int x`,
denoting that `x` is an integer.
In contrast, in HM types we write `x : int`.
Here `int` is a ground type, one of the fundamental parts of the system.
There are ways to extend the set of ground types,
and even build *parametric* types,
but we ignore those here.[^3]

## Higher order functions

## Currying

## Partial application


[^1]: Whether the immutability is enforced by the programmer or the language, and whether it is pervasive or only the default, I am happy to consider functional programming as a big church.

[^2]: By this definition, one can consider even Python a functional programming language if used carefully. This is despite the presence of objects and classes, no tail recursion, and anonymous ("lambda") functions that are embarrassingly under-powered.

[^3]: I couldn't help myself. A quick description of parametric types would be they are types which can be specialised with other types. Think C++ templates, or Java Generics. The canonical example would be a list: a list of integers is a `int list`, while a list of list of strings would be a `string list list`. An empty list has type `'a list`, where `'a` is a type variable. We'll get to that.

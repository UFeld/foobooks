/**
 * Responds to requests to GET /books/show/{id}
 */
public function getShow($title) {
    return view('books.show')->with('title', $title);
}

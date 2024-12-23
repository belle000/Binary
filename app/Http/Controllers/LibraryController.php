<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class LibraryController extends Controller
{
    /**
     * Show all majors (Page after login).
     */
    public function selectMajor()
    {
        // Get all majors
        $majors = Major::all();
        return view('library.index', compact('majors'));
    }

    /**
     * Show semesters for a specific major.
     */
    public function showMajor($id)
    {
        // Find the major by ID
        $major = Major::findOrFail($id);
        
        // Get semesters related to the major
        $semesters = Semester::where('major_id', $id)->get();
        
        // Return the view with major and semesters
        return view('library.major', compact('major', 'semesters'));
    }

    /**
     * Show subjects for a specific semester within a major.
     */
    public function showSubjects($id, $semester)
    {
        // Find the specific semester data for the major and semester number
        $semesterData = Semester::where('major_id', $id)
        ->where('number', $semester)
        ->firstOrFail();

        // Get subjects for the semester
        $subjects = Subject::where('semester_id', $semesterData->id)->get();
        
        // Return the view with the semester and subjects
        return view('library.semester', compact('semesterData', 'subjects'));
    }

    /**
     * Show books for a specific subject.
     */
    public function showBooks($id)
    {
        // Find the subject by ID
        $subject = Subject::findOrFail($id);
        
        // Get books related to the subject
        $books = Book::where('subject_id', $id)->get();
        
        // Return the view with the subject and books
        return view('library.subject', compact('subject', 'books'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search for books by title or description
        $books = Book::where('title', 'LIKE', "%{$query}%")
            ->with('subject')
            ->orWhereHas('subject', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%$query%");
            })
            ->paginate(10);
            // ->orWhere('description', 'LIKE', "%{$query}%")

        return view('library.search', compact('books'));
    }

    

    public function download($id)
    {
        $book = Book::findOrFail($id);

        if (!$book->address) {
            return redirect()->back()->with('error', 'The requested book does not have a downloadable file.');
        }

        // Assuming the file is stored in 'public/books'
        $filePath = public_path('books/' . basename($book->address));

        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'File not found.');
        }

        return response()->download($filePath, $book->title . '.pdf');
    }
}


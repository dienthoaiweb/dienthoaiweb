@rem = '--*-Perl-*--
@echo off
if "%OS%" == "Windows_NT" goto WinNT
IF EXIST "%~dp0perl.exe" (
"%~dp0perl.exe" -x -S "%0" %1 %2 %3 %4 %5 %6 %7 %8 %9
) ELSE IF EXIST "%~dp0..\..\bin\perl.exe" (
"%~dp0..\..\bin\perl.exe" -x -S "%0" %1 %2 %3 %4 %5 %6 %7 %8 %9
) ELSE (
perl -x -S "%0" %1 %2 %3 %4 %5 %6 %7 %8 %9
)

goto endofperl
:WinNT
IF EXIST "%~dp0perl.exe" (
"%~dp0perl.exe" -x -S %0 %*
) ELSE IF EXIST "%~dp0..\..\bin\perl.exe" (
"%~dp0..\..\bin\perl.exe" -x -S %0 %*
) ELSE (
perl -x -S %0 %*
)

if NOT "%COMSPEC%" == "%SystemRoot%\system32\cmd.exe" goto endofperl
if %errorlevel% == 9009 echo You do not have Perl in your PATH.
if errorlevel 1 goto script_failed_so_exit_with_non_zero_val 2>nul
goto endofperl
@rem ';
#!perl
#line 29
    eval 'exec \xampp\perl\bin\perl.exe -S $0 ${1+"$@"}'
	if $running_under_some_shell;

=head1 NAME

diagnostics, splain - produce verbose warning diagnostics

=head1 SYNOPSIS

Using the C<diagnostics> pragma:

    use diagnostics;
    use diagnostics -verbose;

    enable  diagnostics;
    disable diagnostics;

Using the C<splain> standalone filter program:

    perl program 2>diag.out
    splain [-v] [-p] diag.out

Using diagnostics to get stack traces from a misbehaving script:

    perl -Mdiagnostics=-traceonly my_script.pl

=head1 DESCRIPTION

=head2 The C<diagnostics> Pragma

This module extends the terse diagnostics normally emitted by both the
perl compiler and the perl interpreter (from running perl with a -w 
switch or C<use warnings>), augmenting them with the more
explicative and endearing descriptions found in L<perldiag>.  Like the
other pragmata, it affects the compilation phase of your program rather
than merely the execution phase.

To use in your program as a pragma, merely invoke

    use diagnostics;

at the start (or near the start) of your program.  (Note 
that this I<does> enable perl's B<-w> flag.)  Your whole
compilation will then be subject(ed :-) to the enhanced diagnostics.
These still go out B<STDERR>.

Due to the interaction between runtime and compiletime issues,
and because it's probably not a very good idea anyway,
you may not use C<no diagnostics> to turn them off at compiletime.
However, you may control their behaviour at runtime using the 
disable() and enable() methods to turn them off and on respectively.

The B<-verbose> flag first prints out the L<perldiag> introduction before
any other diagnostics.  The $diagnostics::PRETTY variable can generate nicer
escape sequences for pagers.

Warnings dispatched from perl itself (or more accurately, those that match
descriptions found in L<perldiag>) are only displayed once (no duplicate
descriptions).  User code generated warnings a la warn() are unaffected,
allowing duplicate user messages to be displayed.

This module also adds a stack trace to the error message when perl dies.
This is useful for pinpointing what
caused the death.  The B<-traceonly> (or
just B<-t>) flag turns off the explanations of warning messages leaving just
the stack traces.  So if your script is dieing, run it again with

  perl -Mdiagnostics=-traceonly my_bad_script

to see the call stack at the time of death.  By supplying the B<-warntrace>
(or just B<-w>) flag, 
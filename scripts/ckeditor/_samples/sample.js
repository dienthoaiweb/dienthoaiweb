 $!\n";

  # Flag to indicate whether we have converted at least one file
  # indicates how many files have been converted
  my $converted = 0;

  # Loop over the input files
  foreach my $pod (@pods) {

    if (-f $pod) {

      warn "Converting $pod\n" if $options{'verbose'};

      # Open the file (need the handle)
      # Use auto-vivified handle in perl 5.6
      my $podfh = gensym;
      open ($podfh, "<$pod") || die "Could not open pod file $pod: $!\n";

      # if this is the first file to be converted we may want to add
      # a preamble (controlled by command line option)
      my $preamble = 0;
      $preamble = 1 if ($converted == 0 && $options{'full'});

      # if this is the last file to be converted may want to add
      # a postamble (controlled by command line option)
      # relies on a previous pass to check existence of all pods we
      # are converting.
      my $postamble = ( ($converted == $#pods && $options{'full'}) ? 1 : 0 );

      # Open parser object
      # May want to start with a preamble for the first one and
      # end with an index for the last
      my $parser = new Pod::LaTeX(
				  MakeIndex => $options{'full'},
				  TableOfContents => $preamble,
				  ReplaceNAMEwithSection => $options{'modify'},
				  UniqueLabels => $options{'modify'},
				  StartWithNewPage => $options{'full'},
				  AddPreamble => $preamble,
				  AddPostamble => $postamble,
				  Head1Level => $options{'h1level'},
				  LevelNoNum => $options{'h1level'} + 1,
                                  %User
				 );

      # Store the file name for error messages
      # This is a kluge that breaks the data hiding of the object
      $parser->{_INFILE} = $pod;

      # Select sections if supplied
      $parser->select(@{ $options{'sections'}})
	if @{$options{'sections'}};

      # Parse it
      $parser->parse_from_filehandle($podf